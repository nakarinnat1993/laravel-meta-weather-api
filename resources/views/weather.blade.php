<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MetaWeather API.</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    {{-- {{dd($bangkok)}} --}}
    <div class='container mt-2'>

        <div class="row ">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2>
                    <a href="#">
                        {{$bangkoks->title}}
                    </a>
                </h2>
                <p>
                    {{$bangkoks->time}}<br>
                    {{ \Carbon\Carbon::parse($bangkoks->sun_rise)->diffForhumans() }}
                    {{-- Updated 23&nbsp;minutes ago --}}
                </p>
            </div>

            @foreach ($bangkoks->consolidated_weather as $bangkok)

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4" data-date="2020-3-8">
                <h3>
                    <a href="#">

                        {{$bangkok->applicable_date}}

                    </a>
                </h3>


                <dl>
                    <dt>Weather</dt>

                    <dd class="weatherstate" data-original-title="" title="">
                        <img src="https://www.metaweather.com/static/img/weather/{{$bangkok->weather_state_abbr}}.svg " alt="" srcset="" width="32px">
                        <span class="hidden-xs hidden-sm">{{$bangkok->weather_state_name}}</span>
                    </dd>

                    <dt>Temperature</dt>
                    <dd>

                        Max: {{round($bangkok->max_temp)}}°C<br>
                        Min: {{round($bangkok->min_temp)}}°C

                    </dd>

                    <dt>Wind</dt>
                    <dd class="wind">
                        <span class="dir dir-sse" title="SSE"></span>
                        {{round($bangkok->wind_speed)}}mph
                    </dd>

                </dl>

            </div>
            @endforeach



            {{-- <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4" data-date="2020-3-9">
                <h3>
                    <a href="#">


                        Tomorrow


                    </a>
                </h3>


                <dl>
                    <dt>Weather</dt>

                    <dd class="weatherstate" data-original-title="" title="">
                        <div class="state-icon-sml state-c"></div>
                        <span class="hidden-xs hidden-sm">Clear</span>
                    </dd>

                    <dt>Temperature</dt>
                    <dd>

                        Max: 34°C<br>
                        Min: 26°C

                    </dd>

                    <dt>Wind</dt>
                    <dd class="wind">
                        <span class="dir dir-ssw" title="SSW"></span>
                        4mph
                    </dd>

                </dl>

            </div>



            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4" data-date="2020-3-10">
                <h3>
                    <a href="#">


                        Tue 10 Mar


                    </a>
                </h3>


                <dl>
                    <dt>Weather</dt>

                    <dd class="weatherstate" data-original-title="" title="">
                        <div class="state-icon-sml state-c"></div>
                        <span class="hidden-xs hidden-sm">Clear</span>
                    </dd>

                    <dt>Temperature</dt>
                    <dd>

                        Max: 33°C<br>
                        Min: 26°C

                    </dd>

                    <dt>Wind</dt>
                    <dd class="wind">
                        <span class="dir dir-s" title="S"></span>
                        5mph
                    </dd>

                </dl>

            </div>



            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4" data-date="2020-3-11">
                <h3>
                    <a href="#">


                        Wed 11 Mar


                    </a>
                </h3>


                <dl>
                    <dt>Weather</dt>

                    <dd class="weatherstate" data-original-title="" title="">
                        <div class="state-icon-sml state-lc"></div>
                        <span class="hidden-xs hidden-sm">Light Cloud</span>
                    </dd>

                    <dt>Temperature</dt>
                    <dd>

                        Max: 34°C<br>
                        Min: 26°C

                    </dd>

                    <dt>Wind</dt>
                    <dd class="wind">
                        <span class="dir dir-s" title="S"></span>
                        5mph
                    </dd>

                </dl>

            </div>



            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4" data-date="2020-3-12">
                <h3>
                    <a href="#">


                        Thu 12 Mar


                    </a>
                </h3>


                <dl>
                    <dt>Weather</dt>

                    <dd class="weatherstate" data-original-title="" title="">
                        <div class="state-icon-sml state-c"></div>
                        <span class="hidden-xs hidden-sm">Clear</span>
                    </dd>

                    <dt>Temperature</dt>
                    <dd>

                        Max: 33°C<br>
                        Min: 27°C

                    </dd>

                    <dt>Wind</dt>
                    <dd class="wind">
                        <span class="dir dir-s" title="S"></span>
                        6mph
                    </dd>

                </dl>

            </div> --}}

        </div>
    </div>

</body>

</html>
