<div class="user-menu">
    <div class="user">
        <div class="image">
        <img src="/img/companyname.jpg" alt="">
            <label for="user-photo">
                <i class="fas fa-pencil-alt"></i>
            </label>
            <input type="file" id="user-photo" class="d-none">
        </div>
        <div class="content">
            <h4>
                {{ auth('companies')->user()->name }}
            </h4>
        </div>
    </div>
    <ul class="menu">
        <li>
            <a href="{{ url('/profile') }}">
                <i class="flaticon-hammer"></i>
                My Bids</a>
        </li>
        <li>
            <a href="{{ url('/company-profile') }}" class="active">
                <i class="flaticon-settings"></i>
                Company Profile </a>
        </li>
        <li>
            <a href="{{ url('/company-winning-bids') }}">
                <i class="flaticon-best-seller"></i>
                Winning Bids</a>
        </li>
      
        <li>
            <a href="{{ route('company_code') }}">
                <i class="flaticon-shake-hand"></i>
                Referrals</a>
        </li>
        
    </ul>
</div>