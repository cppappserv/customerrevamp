<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll spr" >
        <nav>
            <ul class="nav">
                @if(Auth::user()->groupadmin == '1')
                    <li><a href="/qrxpurch"><i class="lnr lnr-home"></i>Status PO</a></li>
                    <li><a href="/rqrxhistory"><i class="lnr lnr-home"></i>Data QRX_TXHISTORY</a></li>
                    <li><a href="/inbound"><i class="lnr lnr-home"></i>Inbound</a></li>
                    <li><a href="/outbound"><i class="lnr lnr-home"></i>Outbond</a></li>
                    {{-- <li><a href="/rqrxhistorytemp"><i class="lnr lnr-home"></i>Data QRX_TXHISTORYTEMP</a></li> --}}
                @else
                    
                <li><a href="/" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                <li>
                    <a href="#subMaster" data-toggle="collapse" class="collapsed"><i class="lnr lnr-dice"></i> <span>Master Data</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subMaster" class="collapse ">
                        <ul class="nav">
                            <li>
                                <a href="#subMaster1" data-toggle="collapse" class="collapsed"><i class="lnr lnr-dice"></i> <span>Master</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                                <div id="subMaster1" class="collapse ">
                                    <ul class="nav">
                                        <li><a href="/company" class="">Company</a></li>
                                        <li><a href="/area" class="">Area</a></li>
                                        <li><a href="/sloc" class="">S-Location</a></li>
                                        <li><a href="/plant" class="">Plant</a></li>
                                        <li><a href="/device" class="">Device</a></li>
                                        <li><a href="/prodline" class="">Product Line</a></li>
                                        <li><a href="/prodtype" class="">Product Type</a></li>
                                        <li><a href="/listcode" class="">List Code</a></li>
                                        <li><a href="/images" class="">Image Material</a></li>
                                        
                                    </ul>
                                </div>
                                
                            </li>
                            <li>
                                <a href="#subMaster2" data-toggle="collapse" class="collapsed"><i class="lnr lnr-dice"></i> <span>Treatment</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                                <div id="subMaster2" class="collapse ">
                                    <ul class="nav">
                                        <li><a href="/shrimptreatment" class="">Shrimp Treatment</a></li>
                                        <li><a href="/mattreatment" class="">Material Treatment</a></li>
                                    </ul>
                                </div>
                                
                            </li>
                            <li>
                                <a href="#subMaster3" data-toggle="collapse" class="collapsed"><i class="lnr lnr-dice"></i> <span>Shrimp</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                                <div id="subMaster3" class="collapse ">
                                    <ul class="nav">
                                        <li><a href="/shrimptype" class="">Shrimp Type</a></li>
                                        <li><a href="/shrimpsize" class="">Shrimp Size</a></li>
                                        <li><a href="/shrimpsizehl" class="">Shrimp Head Less</a></li>
                                        <li><a href="/shrimpsizeho" class="">Shrimp Head On</a></li>
                                        <li><a href="/shrimpfreezingtype" class="">Shrimp Freezeing Type</a></li>
                                        <li><a href="/shrimppackagingsize" class="">Shrimp Packaging Size</a></li>
                                        <li><a href="/shrimpcolour" class="">Shrimp Colour</a></li>
                                        <li><a href="/shrimpgrade" class="">Shrimp Grade</a></li>
                                    </ul>
                                </div>
                                
                            </li>

                        </ul>
                    </div>
                    
                </li>
                
                <li>
                    <a href="#subTransaksi" data-toggle="collapse" class="collapsed"><i class="lnr lnr-dice"></i> <span>Maintance</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subTransaksi" class="collapse ">
                        <ul class="nav">
                            <li><a href="/qrxpurch" class="">Status PO</a></li>
                            <li><a href="/rqrxhistory"><i class="lnr lnr-home"></i>Data QRX_TXHISTORY</a></li>
                            <li><a href="/inbound"><i class="lnr lnr-home"></i>Inbound</a></li>
                            <li><a href="/outbound"><i class="lnr lnr-home"></i>Outbond</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#subSetting" data-toggle="collapse" class="collapsed"><i class="lnr lnr-dice"></i> <span>Seting</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subSetting" class="collapse ">
                        <ul class="nav">
                            <li><a href="/setuser" class="">User Barcode</a></li>
                            <li><a href="/otorisasiweb" class="">User Web</a></li>
                            <li><a href="/version" class="">Version Apps Barcode</a></li>
                        </ul>
                    </div>
                </li>
                @endif
            </ul>
        </nav>
    </div>
</div>