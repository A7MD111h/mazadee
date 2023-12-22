<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Auction;
use Illuminate\Console\Command;

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
        }

        // $this->info('Auction statuses updated successfully.');
    }
}
