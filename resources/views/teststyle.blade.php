{{--@extends('welcome')--}}
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

{{--@for($i = 1; $i <= 9; $i++)--}}
{{--    <div class="w-32 h-10 bg-pink-{{$i}}00">HI</div>--}}
{{--@endfor--}}
<body class="bg-gray-300">
    <div class="space-x-4 ...">
        <div class="inline-block ...">1</div>
        <div class="inline-block ...">2</div>
        <div class="inline-block ...">3</div>
    </div>

    {{--    <div>--}}
    {{--        <div class="bg-purple-700 w-screen h-full">--}}
    {{--            <h2 class="text-5xl font-bold text-center text-purple-300 ">Covid 19 tracker</h2>--}}
    {{--        </div>--}}

    {{--        <table class="inline-grid">--}}
    {{--            <tr>--}}
    {{--    --}}{{--            Улсны болгоны батлагдсан тохиолдол--}}
    {{--                <td>--}}
    {{--                    <div class="float-left bg-green-300 overflow-hidden">--}}
    {{--                        @foreach($datas['Countries'] as $country)--}}
    {{--                            <p>{{$country['Country']}}</p>--}}
    {{--                        @endforeach--}}
    {{--                    </div>--}}
    {{--                </td>--}}
    {{--                <td>--}}
    {{--                <td>--}}
    {{--        --}}{{--            Дэлхийн хэмжээнд батлагдсан тохиолдолууд болон нас баралт, эдгэрэлтийг харуулна.--}}
    {{--                    <div class="float-right">--}}
    {{--                        <div class="mx-auto inline-flex space-x-4 items-start my-4 bg-red-200">--}}
    {{--                            <div class="flex-1 shadow-sm rounded bg-gradient-to-tr from-purple-100 via-pink-100 to-red-100 pt-4 m-4">--}}
    {{--                                <div class="font-sans font-bold text-sm text-center text-red-700 pb-4">Батлагдсан</div>--}}
    {{--                                <div class="font-sans font-bold text-xl text-center text-red-500" >&nbsp;<span>+{{$datas['Global']['NewConfirmed']}}</span></div>--}}
    {{--                                <div class="font-sans font-bold text-2xl md:text-2xl text-center text-red-700" >{{$datas['Global']['TotalConfirmed']}}</div>--}}
    {{--                                <div class="aspect-w-4 aspect-h-2"><svg width="100%" height="100%" viewBox="0 0 187 94" preserveAspectRatio="xMidYMid meet"><path fill="none" stroke="rgba(185, 28, 28, 0.8)" stroke-width="4" d="M10,84C14.282051282051281,75.92933947772657,18.564102564102566,67.85867895545314,22.846153846153847,67.85867895545314C27.128205128205128,67.85867895545314,31.410256410256412,82.29493087557603,35.69230769230769,82.29493087557603C39.97435897435898,82.29493087557603,44.256410256410255,71.49615975422427,48.53846153846154,61.72043010752688C52.820512820512825,51.944700460829495,57.1025641025641,23.640552995391705,61.38461538461539,23.640552995391705C65.66666666666667,23.640552995391705,69.94871794871796,77.97542242703533,74.23076923076924,77.97542242703533C78.51282051282053,77.97542242703533,82.7948717948718,36.485407066052225,87.07692307692308,36.485407066052225C91.35897435897436,36.485407066052225,95.64102564102564,50.58064516129032,99.92307692307692,50.58064516129032C104.2051282051282,50.58064516129032,108.48717948717949,10,112.76923076923077,10C117.05128205128206,10,121.33333333333333,61.265745007680486,125.61538461538461,61.265745007680486C129.8974358974359,61.265745007680486,134.17948717948718,13.296466973886329,138.46153846153848,13.296466973886329C142.74358974358975,13.296466973886329,147.02564102564105,29.437788018433178,151.30769230769232,29.437788018433178C155.5897435897436,29.437788018433178,159.8717948717949,11.364055299539173,164.15384615384616,11.364055299539173C168.43589743589743,11.364055299539173,172.71794871794873,15.001536098310291,177,18.63901689708141" stroke-dasharray="433.7686462402344" stroke-dashoffset="0"></path></svg></div>--}}
    {{--                            </div>--}}
    {{--                            <div class="flex-1 shadow-sm rounded bg-gradient-to-tl from-white via-purple-100 to-indigo-200 pt-4 m-4">--}}
    {{--                                <div class="font-sans font-bold text-sm text-center text-indigo-700 pb-4">Эмчлэгдэж буй</div>--}}
    {{--                                <div class="font-sans  text-xl text-center text-indigo-400">&nbsp;</div>--}}
    {{--                                <div class="font-sans font-bold text-2xl md:text-2xl text-center text-indigo-700">+{{$datas['Global']['NewRecovered']}}</div>--}}
    {{--                                <div class="aspect-w-4 aspect-h-2"><svg width="100%" height="100%" viewBox="0 0 187 94" preserveAspectRatio="xMidYMid meet"><path fill="none" stroke="rgba(67, 56, 202, 0.8)" stroke-width="4" d="M10,84C14.282051282051281,82.24274406332454,18.564102564102566,80.48548812664909,22.846153846153847,79.1719836891341C27.128205128205128,77.8584792516191,31.410256410256412,77.38514431918126,35.69230769230769,76.11897337491006C39.97435897435898,74.85280243063885,44.256410256410255,73.5925481730231,48.53846153846154,71.57495802350684C52.820512820512825,69.55736787399057,57.1025641025641,65.79731350443751,61.38461538461539,64.01343247781243C65.66666666666667,62.22955145118734,69.94871794871796,62.42332293915408,74.23076923076924,60.871671863756305C78.51282051282053,59.320020788358526,82.7948717948718,56.57911569521068,87.07692307692308,54.70352602542576C91.35897435897436,52.82793635564084,95.64102564102564,51.811745422563355,99.92307692307692,49.61813384504677C104.2051282051282,47.42452226753018,108.48717948717949,43.42040457343888,112.76923076923077,41.541856560326224C117.05128205128206,39.66330854721357,121.33333333333333,40.1366434796514,125.61538461538461,38.34684576637083C129.8974358974359,36.55704805309027,134.17948717948718,33.06324458303351,138.46153846153848,30.803070280642842C142.74358974358975,28.542895978252183,147.02564102564105,27.114016150955464,151.30769230769232,24.785799952026863C155.5897435897436,22.457583753098262,159.8717948717949,19.298073079075714,164.15384615384616,16.833773087071236C168.43589743589743,14.369473095066759,172.71794871794873,12.18473654753338,177,10" stroke-dasharray="184.07333374023438" stroke-dashoffset="0"></path></svg></div>--}}
    {{--                            </div>--}}
    {{--                            <div class="flex-1 shadow-sm rounded bg-gradient-to-br from-white via-green-100 to-green-200 pt-4 m-4">--}}
    {{--                                <div class="font-sans font-bold text-sm text-center text-green-700 pb-4">Эдгэрсэн</div>--}}
    {{--                                <div class="font-sans font-bold text-xl text-center text-green-500">&nbsp;+486</div>--}}
    {{--                                <div class="font-sans font-bold text-2xl md:text-2xl text-center text-green-700">{{$datas['Global']['TotalRecovered']}}</div>--}}
    {{--                                <div class="aspect-w-4 aspect-h-2"><svg width="100%" height="100%" viewBox="0 0 187 94" preserveAspectRatio="xMidYMid meet"><path fill="none" stroke="rgba(4, 120, 87, 0.8)" stroke-width="4" d="M10,62.725C14.282051282051281,73.3625,18.564102564102566,84,22.846153846153847,84C27.128205128205128,84,31.410256410256412,64.36944444444444,35.69230769230769,61.49166666666666C39.97435897435898,58.61388888888889,44.256410256410255,57.175,48.53846153846154,57.175C52.820512820512825,57.175,57.1025641025641,58.71666666666666,61.38461538461539,58.71666666666666C65.66666666666667,58.71666666666666,69.94871794871796,54.913888888888884,74.23076923076924,52.85833333333333C78.51282051282053,50.80277777777778,82.7948717948718,46.38333333333334,87.07692307692308,46.38333333333334C91.35897435897436,46.38333333333334,95.64102564102564,46.38333333333334,99.92307692307692,46.38333333333334C104.2051282051282,46.38333333333334,108.48717948717949,44.22500000000001,112.76923076923077,39.90833333333334C117.05128205128206,35.591666666666676,121.33333333333333,10,125.61538461538461,10C129.8974358974359,10,134.17948717948718,30.04166666666667,138.46153846153848,30.04166666666667C142.74358974358975,30.04166666666667,147.02564102564105,21.716666666666665,151.30769230769232,21.716666666666665C155.5897435897436,21.716666666666665,159.8717948717949,40.21666666666666,164.15384615384616,40.21666666666666C168.43589743589743,40.21666666666666,172.71794871794873,30.96666666666666,177,21.716666666666665" stroke-dasharray="254.8731231689453" stroke-dashoffset="0"></path></svg></div>--}}
    {{--                            </div>--}}
    {{--                            <div class="flex-1 shadow-sm rounded bg-gradient-to-b from-gray-100 via-white to-gray-400 pt-4 m-4">--}}
    {{--                                <div class="font-sans font-bold text-sm text-center text-gray-700 pb-4">Нас барсан</div>--}}
    {{--                                <div class="font-sans font-bold text-xl text-center text-gray-500">&nbsp;<span>+{{$datas['Global']['NewDeaths']}}</span></div>--}}
    {{--                                <div class="font-sans font-bold text-2xl md:text-2xl text-center text-gray-700">{{$datas['Global']['TotalDeaths']}}</div>--}}
    {{--                                <div class="aspect-w-4 aspect-h-2"><svg width="100%" height="100%" viewBox="0 0 187 94" preserveAspectRatio="xMidYMid meet"><path fill="none" stroke="rgba(55, 65, 81, 0.8)" stroke-width="4" d="M10,84C14.282051282051281,73.42857142857143,18.564102564102566,62.857142857142854,22.846153846153847,62.857142857142854C27.128205128205128,62.857142857142854,31.410256410256412,62.857142857142854,35.69230769230769,62.857142857142854C39.97435897435898,62.857142857142854,44.256410256410255,73.42857142857143,48.53846153846154,73.42857142857143C52.820512820512825,73.42857142857143,57.1025641025641,73.42857142857143,61.38461538461539,73.42857142857143C65.66666666666667,73.42857142857143,69.94871794871796,69.9047619047619,74.23076923076924,62.857142857142854C78.51282051282053,55.80952380952381,82.7948717948718,31.142857142857142,87.07692307692308,31.142857142857142C91.35897435897436,31.142857142857142,95.64102564102564,47,99.92307692307692,52.285714285714285C104.2051282051282,57.57142857142858,108.48717948717949,62.857142857142854,112.76923076923077,62.857142857142854C117.05128205128206,62.857142857142854,121.33333333333333,41.714285714285715,125.61538461538461,41.714285714285715C129.8974358974359,41.714285714285715,134.17948717948718,73.42857142857143,138.46153846153848,73.42857142857143C142.74358974358975,73.42857142857143,147.02564102564105,48.761904761904766,151.30769230769232,41.714285714285715C155.5897435897436,34.666666666666664,159.8717948717949,36.42857142857143,164.15384615384616,31.142857142857142C168.43589743589743,25.857142857142854,172.71794871794873,17.92857142857143,177,10" stroke-dasharray="299.50323486328125" stroke-dashoffset="0"></path></svg></div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </td>--}}
    {{--            </tr>--}}
    {{--        </table>--}}
    {{--    </div>--}}
    {{--+++++++++++++++++++++++++++++++++++++--}}
    {{--        <table class="table">--}}
    {{--            <thead>--}}
    {{--                <tr>--}}
    {{--                    <th>Country</th>--}}
    {{--                    <th>CountryCode</th>--}}
    {{--                    <th>NewConfirmed</th>--}}
    {{--                    <th>TotalCofirmed</th>--}}
    {{--                    <th>NewDeaths</th>--}}
    {{--                    <th>TotalDeaths</th>--}}
    {{--                    <th>NewRecovered</th>--}}
    {{--                    <th>TotalRecovered</th>--}}
    {{--                    <th>Date</th>--}}

    {{--                </tr>--}}
    {{--            </thead>--}}
    {{--            <tbody>--}}
    {{--                @foreach($datas['Global'] as $data)--}}
    {{--                    <tr>--}}
    {{--                        <td>{{$datas['Global']['NewConfirmed']}}</td>--}}
    {{--                        <td>{{$data['Country']}}</td>--}}
    {{--                        <td>{{$data['CountryCode']}}</td>--}}
    {{--                        <td>{{$data['NewConfirmed']}}</td>--}}
    {{--                        <td>{{$data['TotalConfirmed']}}</td>--}}
    {{--                        <td>{{$data['NewDeaths']}}</td>--}}
    {{--                        <td>{{$data['TotalDeaths']}}</td>--}}
    {{--                        <td>{{$data['NewRecovered']}}</td>--}}
    {{--                        <td>{{$data['TotalRecovered']}}</td>--}}
    {{--                        <td>{{$data['Date']}}</td>--}}
    {{--                    </tr>--}}
    {{--                @endforeach--}}
    {{--            </tbody>--}}
    {{--        </table>--}}

</body>
