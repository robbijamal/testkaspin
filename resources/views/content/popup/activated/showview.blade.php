    @if(array_key_exists("fb",$activated))
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 activated-kotak-active">
            <a href="#" onclick="show_fb(event)">
                <div style="float: right;padding: 5px;">
                    <i class="ace-icon fa fa-check-circle" style="color: #0070E0;"></i>
                </div>
                <img height="50" src="{{ url('/') }}/assets/images/logos/facebook.png" alt="facebook" />
                <div class="activated-list-info">
                    <ul style="list-style: none;padding-left: 2px;">
                        @foreach($activated->fb as $key => $isi)
                            @if(!($key == 'ad_type' || $key == 'ad_type_name'))
                                <li>
                                    {{ ucwords(str_replace("_", " ", $key)) }}: {{ $isi }}
                                </li>
                            @endif
                            @endforeach
                    </ul>
                </div>
            </a>
        </div>
    @else
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <a href="#" class="item" onclick="show_fb(event)">
                <img src="{{ url('/') }}/assets/images/logos/facebook.png" alt="facebook" />
                <p>Facebook</p>
            </a>
        </div>
    @endif

    @if(array_key_exists("google",$activated))
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 activated-kotak-active">
            <a href="#" onclick="show_fb(event)">
                <div style="float: right;padding: 5px;">
                    <i class="ace-icon fa fa-check-circle" style="color: #0070E0;"></i>
                </div>
                <img height="50" src="{{ url('/') }}/assets/images/logos/ads.png" alt="google ads manager" />
                <div class="activated-list-info">
                    <ul style="list-style: none;padding-left: 2px;">
                        @foreach($activated->google as $key => $isi)
                            @if(!($key == 'ad_type' || $key == 'ad_type_name'))
                                <li>
                                    {{ ucwords(str_replace("_", " ", $key)) }}: {{ $isi }}
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </a>
        </div>
    @else
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <a href="#" class="item" onclick="show_google(event)">
                <img src="{{ url('/') }}/assets/images/logos/ads.png" alt="google ads manager" />
                <p>Google Ads Manager</p>
            </a>
        </div>
    @endif

    @if(array_key_exists("tradedesk",$activated))
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 activated-kotak-active">
            <a href="#" onclick="show_fb(event)">
                <div style="float: right;padding: 5px;">
                    <i class="ace-icon fa fa-check-circle" style="color: #0070E0;"></i>
                </div>
                <img height="50" src="{{ url('/') }}/assets/images/logos/trade.png" alt="trade desk" />
                <div class="activated-list-info">
                    <ul style="list-style: none;padding-left: 2px;">
                        @foreach($activated->tradedesk as $key => $isi)
                            @if(!($key == 'ad_type' || $key == 'ad_type_name'))
                                <li>
                                    {{ ucwords(str_replace("_", " ", $key)) }}: {{ $isi }}
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </a>
        </div>
    @else
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
            <a href="#" class="item" onclick="show_tradedesk(event)">
                <img src="{{ url('/') }}/assets/images/logos/trade.png" alt="trade desk" />
                <p>Trade Desk</p>
            </a>
        </div>
    @endif


