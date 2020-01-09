@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">Dashboard</div>

    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
    </div>

    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="row">
                <div class="col-lg-5 p-2 mx-4 my-1">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="mdi mdi-account-multiple widget-icon"></i>
                            </div>
                            <h5 class="text-muted font-weight-normal mt-0" title="Number of Customers">Users
                            </h5>
                        <h3 class="mt-3 mb-3">{{$users->count()}}</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 5.27%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-lg-5 p-2 mx-4 my-1">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="mdi mdi-cart-plus widget-icon"></i>
                            </div>
                            <h5 class="text-muted font-weight-normal mt-0" title="Number of Orders">Questions</h5>
                            <h3 class="mt-3 mb-3">{{$questions->count()}}</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-danger mr-2"><i class="mdi mdi-arrow-down-bold"></i> 1.08%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div> <!-- end row -->

            <div class="row">
                <div class="col-lg-5 p-2 mx-4 my-1">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="mdi mdi-currency-usd widget-icon"></i>
                            </div>
                            <h5 class="text-muted font-weight-normal mt-0" title="Average Revenue">Revenue</h5>
                            <h3 class="mt-3 mb-3">$6,254</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-danger mr-2"><i class="mdi mdi-arrow-down-bold"></i> 7.00%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->

                <div class="col-lg-5 p-2 mx-4 my-1">
                    <div class="card widget-flat">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="mdi mdi-pulse widget-icon"></i>
                            </div>
                            <h5 class="text-muted font-weight-normal mt-0" title="Growth">Growth</h5>
                            <h3 class="mt-3 mb-3">+ 30.56%</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                                <span class="text-nowrap">Since last month</span>
                            </p>
                        </div> <!-- end card-body-->
                    </div> <!-- end card-->
                </div> <!-- end col-->
            </div> <!-- end row -->

        </div> 
    </div>  
    <div class="row m-1">        
        <div class="col-lg-12 col-xl-12 py-2">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="text-muted font-weight-normal mt-0 text-truncate" title="Campaign Sent">Campaign Sent</h5>
                            <h3 class="my-2 py-1">9,184</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 3.27%</span>
                            </p>
                        </div>
                        <div class="col-6">
                            <div class="text-right" style="position: relative;">
                                <div id="campaign-sent-chart" data-colors="#727cf5" style="min-height: 60px;"><div id="apexchartsffsoxvvd" class="apexcharts-canvas apexchartsffsoxvvd light" style="width: 324px; height: 60px;"><svg id="SvgjsSvg1277" width="324" height="60" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1279" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1278"><linearGradient id="SvgjsLinearGradient1281" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1282" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1283" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1284" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskffsoxvvd"><rect id="SvgjsRect1287" width="324" height="60" x="0" y="0" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskffsoxvvd"><rect id="SvgjsRect1288" width="326" height="62" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><line id="SvgjsLine1286" x1="0" y1="0" x2="0" y2="60" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="60" fill="url(#SvgjsLinearGradient1281)" filter="none" fill-opacity="0.9" stroke-width="0"></line><g id="SvgjsG1304" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1305" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1308" class="apexcharts-grid"><line id="SvgjsLine1310" x1="0" y1="60" x2="324" y2="60" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1309" x1="0" y1="1" x2="0" y2="60" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1290" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1291" class="apexcharts-series" rel="1" seriesName="seriesx1" data:realIndex="0"><path id="SvgjsPath1293" d="M 5.890909090909091 60L 5.890909090909091 45L 23.563636363636363 45L 23.563636363636363 60L 5.890909090909091 60" fill="rgba(114,124,245,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskffsoxvvd)" pathTo="M 5.890909090909091 60L 5.890909090909091 45L 23.563636363636363 45L 23.563636363636363 60L 5.890909090909091 60" pathFrom="M 5.890909090909091 60L 5.890909090909091 60L 23.563636363636363 60L 23.563636363636363 60L 5.890909090909091 60" cy="45" cx="35.345454545454544" j="0" val="25" barHeight="15" barWidth="17.672727272727272"></path><path id="SvgjsPath1294" d="M 35.345454545454544 60L 35.345454545454544 20.4L 53.018181818181816 20.4L 53.018181818181816 60L 35.345454545454544 60" fill="rgba(114,124,245,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskffsoxvvd)" pathTo="M 35.345454545454544 60L 35.345454545454544 20.4L 53.018181818181816 20.4L 53.018181818181816 60L 35.345454545454544 60" pathFrom="M 35.345454545454544 60L 35.345454545454544 60L 53.018181818181816 60L 53.018181818181816 60L 35.345454545454544 60" cy="20.4" cx="64.8" j="1" val="66" barHeight="39.6" barWidth="17.672727272727272"></path><path id="SvgjsPath1295" d="M 64.8 60L 64.8 35.400000000000006L 82.47272727272727 35.400000000000006L 82.47272727272727 60L 64.8 60" fill="rgba(114,124,245,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskffsoxvvd)" pathTo="M 64.8 60L 64.8 35.400000000000006L 82.47272727272727 35.400000000000006L 82.47272727272727 60L 64.8 60" pathFrom="M 64.8 60L 64.8 60L 82.47272727272727 60L 82.47272727272727 60L 64.8 60" cy="35.400000000000006" cx="94.25454545454545" j="2" val="41" barHeight="24.599999999999998" barWidth="17.672727272727272"></path><path id="SvgjsPath1296" d="M 94.25454545454545 60L 94.25454545454545 6.600000000000001L 111.92727272727272 6.600000000000001L 111.92727272727272 60L 94.25454545454545 60" fill="rgba(114,124,245,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskffsoxvvd)" pathTo="M 94.25454545454545 60L 94.25454545454545 6.600000000000001L 111.92727272727272 6.600000000000001L 111.92727272727272 60L 94.25454545454545 60" pathFrom="M 94.25454545454545 60L 94.25454545454545 60L 111.92727272727272 60L 111.92727272727272 60L 94.25454545454545 60" cy="6.600000000000001" cx="123.7090909090909" j="3" val="89" barHeight="53.4" barWidth="17.672727272727272"></path><path id="SvgjsPath1297" d="M 123.7090909090909 60L 123.7090909090909 22.200000000000003L 141.38181818181818 22.200000000000003L 141.38181818181818 60L 123.7090909090909 60" fill="rgba(114,124,245,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskffsoxvvd)" pathTo="M 123.7090909090909 60L 123.7090909090909 22.200000000000003L 141.38181818181818 22.200000000000003L 141.38181818181818 60L 123.7090909090909 60" pathFrom="M 123.7090909090909 60L 123.7090909090909 60L 141.38181818181818 60L 141.38181818181818 60L 123.7090909090909 60" cy="22.200000000000003" cx="153.16363636363636" j="4" val="63" barHeight="37.8" barWidth="17.672727272727272"></path><path id="SvgjsPath1298" d="M 153.16363636363636 60L 153.16363636363636 45L 170.83636363636361 45L 170.83636363636361 60L 153.16363636363636 60" fill="rgba(114,124,245,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskffsoxvvd)" pathTo="M 153.16363636363636 60L 153.16363636363636 45L 170.83636363636361 45L 170.83636363636361 60L 153.16363636363636 60" pathFrom="M 153.16363636363636 60L 153.16363636363636 60L 170.83636363636361 60L 170.83636363636361 60L 153.16363636363636 60" cy="45" cx="182.61818181818182" j="5" val="25" barHeight="15" barWidth="17.672727272727272"></path><path id="SvgjsPath1299" d="M 182.61818181818182 60L 182.61818181818182 33.6L 200.2909090909091 33.6L 200.2909090909091 60L 182.61818181818182 60" fill="rgba(114,124,245,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskffsoxvvd)" pathTo="M 182.61818181818182 60L 182.61818181818182 33.6L 200.2909090909091 33.6L 200.2909090909091 60L 182.61818181818182 60" pathFrom="M 182.61818181818182 60L 182.61818181818182 60L 200.2909090909091 60L 200.2909090909091 60L 182.61818181818182 60" cy="33.6" cx="212.07272727272726" j="6" val="44" barHeight="26.4" barWidth="17.672727272727272"></path><path id="SvgjsPath1300" d="M 212.07272727272726 60L 212.07272727272726 52.8L 229.74545454545455 52.8L 229.74545454545455 60L 212.07272727272726 60" fill="rgba(114,124,245,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskffsoxvvd)" pathTo="M 212.07272727272726 60L 212.07272727272726 52.8L 229.74545454545455 52.8L 229.74545454545455 60L 212.07272727272726 60" pathFrom="M 212.07272727272726 60L 212.07272727272726 60L 229.74545454545455 60L 229.74545454545455 60L 212.07272727272726 60" cy="52.8" cx="241.5272727272727" j="7" val="12" barHeight="7.199999999999999" barWidth="17.672727272727272"></path><path id="SvgjsPath1301" d="M 241.5272727272727 60L 241.5272727272727 38.400000000000006L 259.2 38.400000000000006L 259.2 60L 241.5272727272727 60" fill="rgba(114,124,245,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskffsoxvvd)" pathTo="M 241.5272727272727 60L 241.5272727272727 38.400000000000006L 259.2 38.400000000000006L 259.2 60L 241.5272727272727 60" pathFrom="M 241.5272727272727 60L 241.5272727272727 60L 259.2 60L 259.2 60L 241.5272727272727 60" cy="38.400000000000006" cx="270.98181818181814" j="8" val="36" barHeight="21.599999999999998" barWidth="17.672727272727272"></path><path id="SvgjsPath1302" d="M 270.98181818181814 60L 270.98181818181814 54.6L 288.6545454545454 54.6L 288.6545454545454 60L 270.98181818181814 60" fill="rgba(114,124,245,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskffsoxvvd)" pathTo="M 270.98181818181814 60L 270.98181818181814 54.6L 288.6545454545454 54.6L 288.6545454545454 60L 270.98181818181814 60" pathFrom="M 270.98181818181814 60L 270.98181818181814 60L 288.6545454545454 60L 288.6545454545454 60L 270.98181818181814 60" cy="54.6" cx="300.4363636363636" j="9" val="9" barHeight="5.3999999999999995" barWidth="17.672727272727272"></path><path id="SvgjsPath1303" d="M 300.4363636363636 60L 300.4363636363636 27.6L 318.10909090909087 27.6L 318.10909090909087 60L 300.4363636363636 60" fill="rgba(114,124,245,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskffsoxvvd)" pathTo="M 300.4363636363636 60L 300.4363636363636 27.6L 318.10909090909087 27.6L 318.10909090909087 60L 300.4363636363636 60" pathFrom="M 300.4363636363636 60L 300.4363636363636 60L 318.10909090909087 60L 318.10909090909087 60L 300.4363636363636 60" cy="27.6" cx="329.890909090909" j="10" val="54" barHeight="32.4" barWidth="17.672727272727272"></path><g id="SvgjsG1292" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1311" x1="0" y1="0" x2="324" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1312" x1="0" y1="0" x2="324" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1313" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1314" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1315" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1285" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1306" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1307" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(114, 124, 245);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 325px; height: 61px;"></div></div><div class="contract-trigger"></div></div></div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->

        <div class="col-lg-12 col-xl-12 py-2">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="text-muted font-weight-normal mt-0 text-truncate" title="New Leads">New Leads</h5>
                            <h3 class="my-2 py-1">3,254</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-danger mr-2"><i class="mdi mdi-arrow-down-bold"></i> 5.38%</span>
                            </p>
                        </div>
                        <div class="col-6">
                            <div class="text-right" style="position: relative;">
                                <div id="new-leads-chart" data-colors="#0acf97" style="min-height: 60px;"><div id="apexchartsp0jv38v5" class="apexcharts-canvas apexchartsp0jv38v5 light" style="width: 324px; height: 60px;"><svg id="SvgjsSvg1319" width="324" height="60" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1321" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1320"><clipPath id="gridRectMaskp0jv38v5"><rect id="SvgjsRect1325" width="326" height="62" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskp0jv38v5"><rect id="SvgjsRect1326" width="326" height="62" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><line id="SvgjsLine1324" x1="0" y1="0" x2="0" y2="60" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="60" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1333" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1334" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1337" class="apexcharts-grid"><line id="SvgjsLine1339" x1="0" y1="60" x2="324" y2="60" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1338" x1="0" y1="1" x2="0" y2="60" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1328" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1329" class="apexcharts-series" seriesName="seriesx1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1332" d="M 0 45C 11.339999999999998 45 21.060000000000002 20.4 32.4 20.4C 43.739999999999995 20.4 53.46 35.400000000000006 64.8 35.400000000000006C 76.14 35.400000000000006 85.86 6.600000000000001 97.2 6.600000000000001C 108.53999999999999 6.600000000000001 118.25999999999999 22.200000000000003 129.6 22.200000000000003C 140.94 22.200000000000003 150.66 45 162 45C 173.34 45 183.06 33.6 194.4 33.6C 205.74 33.6 215.46 52.8 226.8 52.8C 238.14000000000001 52.8 247.85999999999999 38.400000000000006 259.2 38.400000000000006C 270.54 38.400000000000006 280.26 54.6 291.6 54.6C 302.94 54.6 312.66 27.6 324 27.6" fill="none" fill-opacity="1" stroke="rgba(10,207,151,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskp0jv38v5)" pathTo="M 0 45C 11.339999999999998 45 21.060000000000002 20.4 32.4 20.4C 43.739999999999995 20.4 53.46 35.400000000000006 64.8 35.400000000000006C 76.14 35.400000000000006 85.86 6.600000000000001 97.2 6.600000000000001C 108.53999999999999 6.600000000000001 118.25999999999999 22.200000000000003 129.6 22.200000000000003C 140.94 22.200000000000003 150.66 45 162 45C 173.34 45 183.06 33.6 194.4 33.6C 205.74 33.6 215.46 52.8 226.8 52.8C 238.14000000000001 52.8 247.85999999999999 38.400000000000006 259.2 38.400000000000006C 270.54 38.400000000000006 280.26 54.6 291.6 54.6C 302.94 54.6 312.66 27.6 324 27.6" pathFrom="M -1 60L -1 60L 32.4 60L 64.8 60L 97.2 60L 129.6 60L 162 60L 194.4 60L 226.8 60L 259.2 60L 291.6 60L 324 60"></path><g id="SvgjsG1330" class="apexcharts-series-markers-wrap"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1345" r="0" cx="0" cy="0" class="apexcharts-marker whj3pf16x no-pointer-events" stroke="#ffffff" fill="#0acf97" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g><g id="SvgjsG1331" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1340" x1="0" y1="0" x2="324" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1341" x1="0" y1="0" x2="324" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1342" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1343" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1344" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1323" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1335" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1336" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(10, 207, 151);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 325px; height: 61px;"></div></div><div class="contract-trigger"></div></div></div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->

        <div class="col-lg-12 col-xl-12 py-2">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="text-muted font-weight-normal mt-0 text-truncate" title="Deals">Deals</h5>
                            <h3 class="my-2 py-1">861</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                            </p>
                        </div>
                        <div class="col-6">
                            <div class="text-right" style="position: relative;">
                                <div id="deals-chart" data-colors="#727cf5" style="min-height: 60px;"><div id="apexcharts7pnyu61o" class="apexcharts-canvas apexcharts7pnyu61o light" style="width: 324px; height: 60px;"><svg id="SvgjsSvg1348" width="324" height="60" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1350" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1349"><linearGradient id="SvgjsLinearGradient1352" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1353" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1354" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1355" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMask7pnyu61o"><rect id="SvgjsRect1358" width="324" height="60" x="0" y="0" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMask7pnyu61o"><rect id="SvgjsRect1359" width="326" height="62" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><line id="SvgjsLine1357" x1="0" y1="0" x2="0" y2="60" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="60" fill="url(#SvgjsLinearGradient1352)" filter="none" fill-opacity="0.9" stroke-width="0"></line><g id="SvgjsG1375" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1376" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1379" class="apexcharts-grid"><line id="SvgjsLine1381" x1="0" y1="60" x2="324" y2="60" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1380" x1="0" y1="1" x2="0" y2="60" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1361" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1362" class="apexcharts-series" rel="1" seriesName="seriesx1" data:realIndex="0"><path id="SvgjsPath1364" d="M 5.890909090909091 60L 5.890909090909091 51L 23.563636363636363 51L 23.563636363636363 60L 5.890909090909091 60" fill="rgba(114,124,245,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7pnyu61o)" pathTo="M 5.890909090909091 60L 5.890909090909091 51L 23.563636363636363 51L 23.563636363636363 60L 5.890909090909091 60" pathFrom="M 5.890909090909091 60L 5.890909090909091 60L 23.563636363636363 60L 23.563636363636363 60L 5.890909090909091 60" cy="51" cx="35.345454545454544" j="0" val="12" barHeight="9" barWidth="17.672727272727272"></path><path id="SvgjsPath1365" d="M 35.345454545454544 60L 35.345454545454544 49.5L 53.018181818181816 49.5L 53.018181818181816 60L 35.345454545454544 60" fill="rgba(114,124,245,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7pnyu61o)" pathTo="M 35.345454545454544 60L 35.345454545454544 49.5L 53.018181818181816 49.5L 53.018181818181816 60L 35.345454545454544 60" pathFrom="M 35.345454545454544 60L 35.345454545454544 60L 53.018181818181816 60L 53.018181818181816 60L 35.345454545454544 60" cy="49.5" cx="64.8" j="1" val="14" barHeight="10.5" barWidth="17.672727272727272"></path><path id="SvgjsPath1366" d="M 64.8 60L 64.8 58.5L 82.47272727272727 58.5L 82.47272727272727 60L 64.8 60" fill="rgba(114,124,245,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7pnyu61o)" pathTo="M 64.8 60L 64.8 58.5L 82.47272727272727 58.5L 82.47272727272727 60L 64.8 60" pathFrom="M 64.8 60L 64.8 60L 82.47272727272727 60L 82.47272727272727 60L 64.8 60" cy="58.5" cx="94.25454545454545" j="2" val="2" barHeight="1.5" barWidth="17.672727272727272"></path><path id="SvgjsPath1367" d="M 94.25454545454545 60L 94.25454545454545 24.75L 111.92727272727272 24.75L 111.92727272727272 60L 94.25454545454545 60" fill="rgba(114,124,245,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7pnyu61o)" pathTo="M 94.25454545454545 60L 94.25454545454545 24.75L 111.92727272727272 24.75L 111.92727272727272 60L 94.25454545454545 60" pathFrom="M 94.25454545454545 60L 94.25454545454545 60L 111.92727272727272 60L 111.92727272727272 60L 94.25454545454545 60" cy="24.75" cx="123.7090909090909" j="3" val="47" barHeight="35.25" barWidth="17.672727272727272"></path><path id="SvgjsPath1368" d="M 123.7090909090909 60L 123.7090909090909 28.5L 141.38181818181818 28.5L 141.38181818181818 60L 123.7090909090909 60" fill="rgba(114,124,245,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7pnyu61o)" pathTo="M 123.7090909090909 60L 123.7090909090909 28.5L 141.38181818181818 28.5L 141.38181818181818 60L 123.7090909090909 60" pathFrom="M 123.7090909090909 60L 123.7090909090909 60L 141.38181818181818 60L 141.38181818181818 60L 123.7090909090909 60" cy="28.5" cx="153.16363636363636" j="4" val="42" barHeight="31.5" barWidth="17.672727272727272"></path><path id="SvgjsPath1369" d="M 153.16363636363636 60L 153.16363636363636 48.75L 170.83636363636361 48.75L 170.83636363636361 60L 153.16363636363636 60" fill="rgba(114,124,245,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7pnyu61o)" pathTo="M 153.16363636363636 60L 153.16363636363636 48.75L 170.83636363636361 48.75L 170.83636363636361 60L 153.16363636363636 60" pathFrom="M 153.16363636363636 60L 153.16363636363636 60L 170.83636363636361 60L 170.83636363636361 60L 153.16363636363636 60" cy="48.75" cx="182.61818181818182" j="5" val="15" barHeight="11.25" barWidth="17.672727272727272"></path><path id="SvgjsPath1370" d="M 182.61818181818182 60L 182.61818181818182 24.75L 200.2909090909091 24.75L 200.2909090909091 60L 182.61818181818182 60" fill="rgba(114,124,245,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7pnyu61o)" pathTo="M 182.61818181818182 60L 182.61818181818182 24.75L 200.2909090909091 24.75L 200.2909090909091 60L 182.61818181818182 60" pathFrom="M 182.61818181818182 60L 182.61818181818182 60L 200.2909090909091 60L 200.2909090909091 60L 182.61818181818182 60" cy="24.75" cx="212.07272727272726" j="6" val="47" barHeight="35.25" barWidth="17.672727272727272"></path><path id="SvgjsPath1371" d="M 212.07272727272726 60L 212.07272727272726 3.75L 229.74545454545455 3.75L 229.74545454545455 60L 212.07272727272726 60" fill="rgba(114,124,245,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7pnyu61o)" pathTo="M 212.07272727272726 60L 212.07272727272726 3.75L 229.74545454545455 3.75L 229.74545454545455 60L 212.07272727272726 60" pathFrom="M 212.07272727272726 60L 212.07272727272726 60L 229.74545454545455 60L 229.74545454545455 60L 212.07272727272726 60" cy="3.75" cx="241.5272727272727" j="7" val="75" barHeight="56.25" barWidth="17.672727272727272"></path><path id="SvgjsPath1372" d="M 241.5272727272727 60L 241.5272727272727 11.25L 259.2 11.25L 259.2 60L 241.5272727272727 60" fill="rgba(114,124,245,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7pnyu61o)" pathTo="M 241.5272727272727 60L 241.5272727272727 11.25L 259.2 11.25L 259.2 60L 241.5272727272727 60" pathFrom="M 241.5272727272727 60L 241.5272727272727 60L 259.2 60L 259.2 60L 241.5272727272727 60" cy="11.25" cx="270.98181818181814" j="8" val="65" barHeight="48.75" barWidth="17.672727272727272"></path><path id="SvgjsPath1373" d="M 270.98181818181814 60L 270.98181818181814 45.75L 288.6545454545454 45.75L 288.6545454545454 60L 270.98181818181814 60" fill="rgba(114,124,245,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7pnyu61o)" pathTo="M 270.98181818181814 60L 270.98181818181814 45.75L 288.6545454545454 45.75L 288.6545454545454 60L 270.98181818181814 60" pathFrom="M 270.98181818181814 60L 270.98181818181814 60L 288.6545454545454 60L 288.6545454545454 60L 270.98181818181814 60" cy="45.75" cx="300.4363636363636" j="9" val="19" barHeight="14.25" barWidth="17.672727272727272"></path><path id="SvgjsPath1374" d="M 300.4363636363636 60L 300.4363636363636 49.5L 318.10909090909087 49.5L 318.10909090909087 60L 300.4363636363636 60" fill="rgba(114,124,245,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMask7pnyu61o)" pathTo="M 300.4363636363636 60L 300.4363636363636 49.5L 318.10909090909087 49.5L 318.10909090909087 60L 300.4363636363636 60" pathFrom="M 300.4363636363636 60L 300.4363636363636 60L 318.10909090909087 60L 318.10909090909087 60L 300.4363636363636 60" cy="49.5" cx="329.890909090909" j="10" val="14" barHeight="10.5" barWidth="17.672727272727272"></path><g id="SvgjsG1363" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1382" x1="0" y1="0" x2="324" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1383" x1="0" y1="0" x2="324" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1384" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1385" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1386" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1356" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1377" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1378" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(114, 124, 245);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 325px; height: 61px;"></div></div><div class="contract-trigger"></div></div></div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->

        <div class="col-lg-12 col-xl-12 py-2">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h5 class="text-muted font-weight-normal mt-0 text-truncate" title="Booked Revenue">Booked Revenue</h5>
                            <h3 class="my-2 py-1">$253k</h3>
                            <p class="mb-0 text-muted">
                                <span class="text-success mr-2"><i class="mdi mdi-arrow-up-bold"></i> 11.7%</span>
                            </p>
                        </div>
                        <div class="col-6">
                            <div class="text-right" style="position: relative;">
                                <div id="booked-revenue-chart" data-colors="#0acf97" style="min-height: 60px;"><div id="apexchartsvowmsfk9k" class="apexcharts-canvas apexchartsvowmsfk9k light" style="width: 324px; height: 60px;"><svg id="SvgjsSvg1389" width="324" height="60" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1391" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1390"><linearGradient id="SvgjsLinearGradient1393" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1394" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop><stop id="SvgjsStop1395" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop><stop id="SvgjsStop1396" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop></linearGradient><clipPath id="gridRectMaskvowmsfk9k"><rect id="SvgjsRect1399" width="324" height="60" x="0" y="0" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskvowmsfk9k"><rect id="SvgjsRect1400" width="326" height="62" x="-1" y="-1" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><line id="SvgjsLine1398" x1="0" y1="0" x2="0" y2="60" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="60" fill="url(#SvgjsLinearGradient1393)" filter="none" fill-opacity="0.9" stroke-width="0"></line><g id="SvgjsG1416" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1417" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1420" class="apexcharts-grid"><line id="SvgjsLine1422" x1="0" y1="60" x2="324" y2="60" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1421" x1="0" y1="1" x2="0" y2="60" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1402" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1403" class="apexcharts-series" rel="1" seriesName="seriesx1" data:realIndex="0"><path id="SvgjsPath1405" d="M 5.890909090909091 60L 5.890909090909091 31.8L 23.563636363636363 31.8L 23.563636363636363 60L 5.890909090909091 60" fill="rgba(10,207,151,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvowmsfk9k)" pathTo="M 5.890909090909091 60L 5.890909090909091 31.8L 23.563636363636363 31.8L 23.563636363636363 60L 5.890909090909091 60" pathFrom="M 5.890909090909091 60L 5.890909090909091 60L 23.563636363636363 60L 23.563636363636363 60L 5.890909090909091 60" cy="31.8" cx="35.345454545454544" j="0" val="47" barHeight="28.2" barWidth="17.672727272727272"></path><path id="SvgjsPath1406" d="M 35.345454545454544 60L 35.345454545454544 33L 53.018181818181816 33L 53.018181818181816 60L 35.345454545454544 60" fill="rgba(10,207,151,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvowmsfk9k)" pathTo="M 35.345454545454544 60L 35.345454545454544 33L 53.018181818181816 33L 53.018181818181816 60L 35.345454545454544 60" pathFrom="M 35.345454545454544 60L 35.345454545454544 60L 53.018181818181816 60L 53.018181818181816 60L 35.345454545454544 60" cy="33" cx="64.8" j="1" val="45" barHeight="27" barWidth="17.672727272727272"></path><path id="SvgjsPath1407" d="M 64.8 60L 64.8 15.600000000000001L 82.47272727272727 15.600000000000001L 82.47272727272727 60L 64.8 60" fill="rgba(10,207,151,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvowmsfk9k)" pathTo="M 64.8 60L 64.8 15.600000000000001L 82.47272727272727 15.600000000000001L 82.47272727272727 60L 64.8 60" pathFrom="M 64.8 60L 64.8 60L 82.47272727272727 60L 82.47272727272727 60L 64.8 60" cy="15.600000000000001" cx="94.25454545454545" j="2" val="74" barHeight="44.4" barWidth="17.672727272727272"></path><path id="SvgjsPath1408" d="M 94.25454545454545 60L 94.25454545454545 51.6L 111.92727272727272 51.6L 111.92727272727272 60L 94.25454545454545 60" fill="rgba(10,207,151,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvowmsfk9k)" pathTo="M 94.25454545454545 60L 94.25454545454545 51.6L 111.92727272727272 51.6L 111.92727272727272 60L 94.25454545454545 60" pathFrom="M 94.25454545454545 60L 94.25454545454545 60L 111.92727272727272 60L 111.92727272727272 60L 94.25454545454545 60" cy="51.6" cx="123.7090909090909" j="3" val="14" barHeight="8.4" barWidth="17.672727272727272"></path><path id="SvgjsPath1409" d="M 123.7090909090909 60L 123.7090909090909 26.4L 141.38181818181818 26.4L 141.38181818181818 60L 123.7090909090909 60" fill="rgba(10,207,151,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvowmsfk9k)" pathTo="M 123.7090909090909 60L 123.7090909090909 26.4L 141.38181818181818 26.4L 141.38181818181818 60L 123.7090909090909 60" pathFrom="M 123.7090909090909 60L 123.7090909090909 60L 141.38181818181818 60L 141.38181818181818 60L 123.7090909090909 60" cy="26.4" cx="153.16363636363636" j="4" val="56" barHeight="33.6" barWidth="17.672727272727272"></path><path id="SvgjsPath1410" d="M 153.16363636363636 60L 153.16363636363636 15.600000000000001L 170.83636363636361 15.600000000000001L 170.83636363636361 60L 153.16363636363636 60" fill="rgba(10,207,151,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvowmsfk9k)" pathTo="M 153.16363636363636 60L 153.16363636363636 15.600000000000001L 170.83636363636361 15.600000000000001L 170.83636363636361 60L 153.16363636363636 60" pathFrom="M 153.16363636363636 60L 153.16363636363636 60L 170.83636363636361 60L 170.83636363636361 60L 153.16363636363636 60" cy="15.600000000000001" cx="182.61818181818182" j="5" val="74" barHeight="44.4" barWidth="17.672727272727272"></path><path id="SvgjsPath1411" d="M 182.61818181818182 60L 182.61818181818182 51.6L 200.2909090909091 51.6L 200.2909090909091 60L 182.61818181818182 60" fill="rgba(10,207,151,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvowmsfk9k)" pathTo="M 182.61818181818182 60L 182.61818181818182 51.6L 200.2909090909091 51.6L 200.2909090909091 60L 182.61818181818182 60" pathFrom="M 182.61818181818182 60L 182.61818181818182 60L 200.2909090909091 60L 200.2909090909091 60L 182.61818181818182 60" cy="51.6" cx="212.07272727272726" j="6" val="14" barHeight="8.4" barWidth="17.672727272727272"></path><path id="SvgjsPath1412" d="M 212.07272727272726 60L 212.07272727272726 53.4L 229.74545454545455 53.4L 229.74545454545455 60L 212.07272727272726 60" fill="rgba(10,207,151,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvowmsfk9k)" pathTo="M 212.07272727272726 60L 212.07272727272726 53.4L 229.74545454545455 53.4L 229.74545454545455 60L 212.07272727272726 60" pathFrom="M 212.07272727272726 60L 212.07272727272726 60L 229.74545454545455 60L 229.74545454545455 60L 212.07272727272726 60" cy="53.4" cx="241.5272727272727" j="7" val="11" barHeight="6.6" barWidth="17.672727272727272"></path><path id="SvgjsPath1413" d="M 241.5272727272727 60L 241.5272727272727 55.8L 259.2 55.8L 259.2 60L 241.5272727272727 60" fill="rgba(10,207,151,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvowmsfk9k)" pathTo="M 241.5272727272727 60L 241.5272727272727 55.8L 259.2 55.8L 259.2 60L 241.5272727272727 60" pathFrom="M 241.5272727272727 60L 241.5272727272727 60L 259.2 60L 259.2 60L 241.5272727272727 60" cy="55.8" cx="270.98181818181814" j="8" val="7" barHeight="4.2" barWidth="17.672727272727272"></path><path id="SvgjsPath1414" d="M 270.98181818181814 60L 270.98181818181814 36.6L 288.6545454545454 36.6L 288.6545454545454 60L 270.98181818181814 60" fill="rgba(10,207,151,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvowmsfk9k)" pathTo="M 270.98181818181814 60L 270.98181818181814 36.6L 288.6545454545454 36.6L 288.6545454545454 60L 270.98181818181814 60" pathFrom="M 270.98181818181814 60L 270.98181818181814 60L 288.6545454545454 60L 288.6545454545454 60L 270.98181818181814 60" cy="36.6" cx="300.4363636363636" j="9" val="39" barHeight="23.4" barWidth="17.672727272727272"></path><path id="SvgjsPath1415" d="M 300.4363636363636 60L 300.4363636363636 10.800000000000004L 318.10909090909087 10.800000000000004L 318.10909090909087 60L 300.4363636363636 60" fill="rgba(10,207,151,0.85)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskvowmsfk9k)" pathTo="M 300.4363636363636 60L 300.4363636363636 10.800000000000004L 318.10909090909087 10.800000000000004L 318.10909090909087 60L 300.4363636363636 60" pathFrom="M 300.4363636363636 60L 300.4363636363636 60L 318.10909090909087 60L 318.10909090909087 60L 300.4363636363636 60" cy="10.800000000000004" cx="329.890909090909" j="10" val="82" barHeight="49.199999999999996" barWidth="17.672727272727272"></path><g id="SvgjsG1404" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1423" x1="0" y1="0" x2="324" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1424" x1="0" y1="0" x2="324" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1425" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1426" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1427" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1397" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect><g id="SvgjsG1418" class="apexcharts-yaxis" rel="0" transform="translate(-21, 0)"><g id="SvgjsG1419" class="apexcharts-yaxis-texts-g"></g></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip light"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(10, 207, 151);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 325px; height: 61px;"></div></div><div class="contract-trigger"></div></div></div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card widget-inline m-3">
                <div class="card-body p-0">
                    <div class="row no-gutters">
                        <div class="col-sm-6 col-xl-6">
                            <div class="card shadow-none m-0">
                                <div class="card-body text-center">
                                    <i class="fas fa-briefcase"></i>
                                    <h3><span>29</span></h3>
                                    <p class="text-muted font-15 mb-0">Total Projects</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-6">
                            <div class="card shadow-none m-0 border-left">
                                <div class="card-body text-center">
                                    <i class="fas fa-list-alt"></i>
                                    <h3><span>715</span></h3>
                                    <p class="text-muted font-15 mb-0">Total Tasks</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-6">
                            <div class="card shadow-none m-0 border-left">
                                <div class="card-body text-center">
                                    <i class="fas fa-users"></i>
                                    <h3><span>31</span></h3>
                                    <p class="text-muted font-15 mb-0">Members</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-6">
                            <div class="card shadow-none m-0 border-left">
                                <div class="card-body text-center">
                                    <i class="fas fa-users"></i>
                                    <h3><span>93%</span> <i class="mdi mdi-arrow-up text-success"></i></h3>
                                    <p class="text-muted font-15 mb-0">Productivity</p>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end row -->
                </div>
            </div> <!-- end card-box-->
        </div> <!-- end col-->
    </div>

    <div class="col-xl-12 col-lg-12 order-lg-2 order-xl-1 my-4">
        <div class="card">
            <div class="card-body">
                <a href="" class="btn btn-sm btn-link float-right mb-3">Export
                    <i class="mdi mdi-download ml-1"></i>
                </a>
                <h4 class="header-title mt-2">Top Selling Products</h4>

                <div class="table-responsive">
                    <table class="table table-centered table-nowrap table-hover mb-0">
                        <tbody>
                            <tr>
                                <td>
                                    <h5 class="font-14 my-1 font-weight-normal">ASOS Ridley High Waist</h5>
                                    <span class="text-muted font-13">07 April 2018</span>
                                </td>
                                <td>
                                    <h5 class="font-14 my-1 font-weight-normal">$79.49</h5>
                                    <span class="text-muted font-13">Price</span>
                                </td>
                                <td>
                                    <h5 class="font-14 my-1 font-weight-normal">82</h5>
                                    <span class="text-muted font-13">Quantity</span>
                                </td>
                                <td>
                                    <h5 class="font-14 my-1 font-weight-normal">$6,518.18</h5>
                                    <span class="text-muted font-13">Amount</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="font-14 my-1 font-weight-normal">Marco Lightweight Shirt</h5>
                                    <span class="text-muted font-13">25 March 2018</span>
                                </td>
                                <td>
                                    <h5 class="font-14 my-1 font-weight-normal">$128.50</h5>
                                    <span class="text-muted font-13">Price</span>
                                </td>
                                <td>
                                    <h5 class="font-14 my-1 font-weight-normal">37</h5>
                                    <span class="text-muted font-13">Quantity</span>
                                </td>
                                <td>
                                    <h5 class="font-14 my-1 font-weight-normal">$4,754.50</h5>
                                    <span class="text-muted font-13">Amount</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="font-14 my-1 font-weight-normal">Half Sleeve Shirt</h5>
                                    <span class="text-muted font-13">17 March 2018</span>
                                </td>
                                <td>
                                    <h5 class="font-14 my-1 font-weight-normal">$39.99</h5>
                                    <span class="text-muted font-13">Price</span>
                                </td>
                                <td>
                                    <h5 class="font-14 my-1 font-weight-normal">64</h5>
                                    <span class="text-muted font-13">Quantity</span>
                                </td>
                                <td>
                                    <h5 class="font-14 my-1 font-weight-normal">$2,559.36</h5>
                                    <span class="text-muted font-13">Amount</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="font-14 my-1 font-weight-normal">Lightweight Jacket</h5>
                                    <span class="text-muted font-13">12 March 2018</span>
                                </td>
                                <td>
                                    <h5 class="font-14 my-1 font-weight-normal">$20.00</h5>
                                    <span class="text-muted font-13">Price</span>
                                </td>
                                <td>
                                    <h5 class="font-14 my-1 font-weight-normal">184</h5>
                                    <span class="text-muted font-13">Quantity</span>
                                </td>
                                <td>
                                    <h5 class="font-14 my-1 font-weight-normal">$3,680.00</h5>
                                    <span class="text-muted font-13">Amount</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="font-14 my-1 font-weight-normal">Marco Shoes</h5>
                                    <span class="text-muted font-13">05 March 2018</span>
                                </td>
                                <td>
                                    <h5 class="font-14 my-1 font-weight-normal">$28.49</h5>
                                    <span class="text-muted font-13">Price</span>
                                </td>
                                <td>
                                    <h5 class="font-14 my-1 font-weight-normal">69</h5>
                                    <span class="text-muted font-13">Quantity</span>
                                </td>
                                <td>
                                    <h5 class="font-14 my-1 font-weight-normal">$1,965.81</h5>
                                    <span class="text-muted font-13">Amount</span>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div> <!-- end table-responsive-->
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->

   <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="dropdown float-right">
                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Weekly Report</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Monthly Report</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item">Settings</a>
                    </div>
                </div>
                <h4 class="header-title mb-3">Tasks</h4>

                <p><b>107</b> Tasks completed out of 195</p>

                <div class="table-responsive">
                    <table class="table table-centered table-nowrap table-hover mb-0">
                        <tbody>
                            <tr>
                                <td>
                                    <h5 class="font-14 my-1"><a href="javascript:void(0);" class="text-body">Coffee detail page - Main Page</a></h5>
                                    <span class="text-muted font-13">Due in 3 days</span>
                                </td>
                                <td>
                                    <span class="text-muted font-13">Status</span> <br>
                                    <span class="badge badge-warning-lighten">In-progress</span>
                                </td>
                                <td>
                                    <span class="text-muted font-13">Assigned to</span>
                                    <h5 class="font-14 mt-1 font-weight-normal">Logan R. Cohn</h5>
                                </td>
                                <td>
                                    <span class="text-muted font-13">Total time spend</span>
                                    <h5 class="font-14 mt-1 font-weight-normal">3h 20min</h5>
                                </td>
                                <td class="table-action" style="width: 90px;">
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="font-14 my-1"><a href="javascript:void(0);" class="text-body">Drinking bottle graphics</a></h5>
                                    <span class="text-muted font-13">Due in 27 days</span>
                                </td>
                                <td>
                                    <span class="text-muted font-13">Status</span> <br>
                                    <span class="badge badge-danger-lighten">Outdated</span>
                                </td>
                                <td>
                                    <span class="text-muted font-13">Assigned to</span>
                                    <h5 class="font-14 mt-1 font-weight-normal">Jerry F. Powell</h5>
                                </td>
                                <td>
                                    <span class="text-muted font-13">Total time spend</span>
                                    <h5 class="font-14 mt-1 font-weight-normal">12h 21min</h5>
                                </td>
                                <td class="table-action" style="width: 90px;">
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="font-14 my-1"><a href="javascript:void(0);" class="text-body">App design and development</a></h5>
                                    <span class="text-muted font-13">Due in 7 days</span>
                                </td>
                                <td>
                                    <span class="text-muted font-13">Status</span> <br>
                                    <span class="badge badge-success-lighten">Completed</span>
                                </td>
                                <td>
                                    <span class="text-muted font-13">Assigned to</span>
                                    <h5 class="font-14 mt-1 font-weight-normal">Scot M. Smith</h5>
                                </td>
                                <td>
                                    <span class="text-muted font-13">Total time spend</span>
                                    <h5 class="font-14 mt-1 font-weight-normal">78h 05min</h5>
                                </td>
                                <td class="table-action" style="width: 90px;">
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="font-14 my-1"><a href="javascript:void(0);" class="text-body">Poster illustation design</a></h5>
                                    <span class="text-muted font-13">Due in 5 days</span>
                                </td>
                                <td>
                                    <span class="text-muted font-13">Status</span> <br>
                                    <span class="badge badge-warning-lighten">In-progress</span>
                                </td>
                                <td>
                                    <span class="text-muted font-13">Assigned to</span>
                                    <h5 class="font-14 mt-1 font-weight-normal">John P. Ritter</h5>
                                </td>
                                <td>
                                    <span class="text-muted font-13">Total time spend</span>
                                    <h5 class="font-14 mt-1 font-weight-normal">26h 58min</h5>
                                </td>
                                <td class="table-action" style="width: 90px;">
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-pencil"></i></a>
                                    <a href="javascript: void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div> <!-- end table-responsive-->

            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div>
 
    <!-- end col -->
</div>
@endsection
