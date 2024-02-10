<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Auction;
use App\Models\Company;
use App\Models\Sub_Category;
use App\Models\User;
use App\Notifications\endAuctionNotification;
use App\Notifications\winAuctionNotification;
use Illuminate\Console\Command;
// use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Notification;


class UpdateAuctionStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Update:AuctionStatus';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the auction status from active to pending after 24 hours from create the auction';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // return Command::SUCCESS;
        $cutoffTime = Carbon::now()->subHours(24);
        $auctions = Auction::where('status','active')->where('created_at', '<=', $cutoffTime)
        ->get();
        foreach ($auctions as $auction) {
            $auction->update(['status' => 'pending']);
            $user=User::find($auction->user_id);
            $subCategory=Sub_Category::find($auction->sub_category_id);
            $subCategoryPhoto=$subCategory->photo;
            Notification::send($user, new endAuctionNotification($auction->id,$subCategoryPhoto));
            if($auction->company_id != NULL){
                $company=Company::find($auction->company_id);
                Notification::send($company,new winAuctionNotification($auction->id,$subCategoryPhoto));
            }            
        }

        $this->info('Auction statuses updated successfully.');
    }
}
