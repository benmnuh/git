<?php

$team_title = get_sub_field('team_title');
$team_description = get_sub_field('team_description');
$team_styles = get_sub_field('team_styles');
$team_object = get_sub_field('team_repeater');

$team_background_choice = $team_styles['background'];
$team_background_image = $team_styles['background_image'];
$team_background_color = $team_styles['background_color'];
?>


<div class="team-section"
     style="<?= ($team_background_choice == 'image') ? 'background-image: url(' . $team_background_image['url'] . ')' : 'background-color:' . $team_background_color ?>">

    <div class="team-section__container">
        <div class="team-section__row">

            <div class="team-section__content">
                <?php if ($team_title): ?>
                    <h2 class="team-section__title"><?= $team_title; ?></h2>
                <?php endif; ?>

                <?php if ($team_description): ?>
                    <div class="team-section__description"><?= $team_description; ?></div>
                <?php endif; ?>

                <div class="team-section__separator separator">
                    <div class="separator__left-line"></div>
                    <div class="separator__dot"></div>
                    <div class="separator__right-line"></div>
                </div>
            </div>
        </div>
    </div>


    <div id="chartContainer" style="height: 650px; width: 100%;">

    </div>


    <script type="text/javascript">


        let teamObjectEncoded =  <?php echo json_encode(json_encode($team_object)); ?>;
        let teamObject = JSON.parse(teamObjectEncoded);
        let teamObjectLength = teamObject.length;

        window.onload = function () {


            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                zoomEnabled: true,
                backgroundColor: "transparent",
                toolTip: {
                    enabled: true,
                    borderThickness: 0,
                    backgroundColor: 'transparent',
                },
                axisX: {
                    minimum: 0,
                    maximum: teamObjectLength + 1,
                    gridThickness: 0,
                    tickLength: 0,
                    lineThickness: 0,
                    labelFormatter: function () {
                        return " ";
                    }
                },
                axisY: {
                    maximum: 100,
                    gridThickness: 0,
                    tickLength: 0,
                    lineThickness: 0,
                    labelFormatter: function () {
                        return " ";
                    }
                },
                data: data  // random generator below
            });

            chart.render();

            addMarkerImages(chart);

            hideMarker(chart);
        };


        var y = 0;
        var data = [];
        var dataSeries = {
            type: "splineArea",
            color: "#e74c3c",
            markerType: "none",
            fillOpacity: '0.2',
            mouseover: onMouseover,
            mouseout: onMouseout
        };


        function onMouseout(e) {
            chart.options.toolTip.enabled = false;
            chart.render();
            document.getElementsByClassName('canvasjs-chart-tooltip')[0].style.display = 'none';

        }

        function onMouseover(e) {
            chart.options.toolTip.enabled = true;
            chart.render();
            document.getElementsByClassName('canvasjs-chart-tooltip')[0].style.display = 'block';
        }

        var dataPoints = [];

        let limit = teamObject.length;

        for (var i = 0; i < limit; i += 1) {
            // y += (Math.ceil(Math.random() * 10));

            if (limit === 5) {
                dataPoints = [
                    {
                        x: 1,
                        y: 41,
                        markerImageUrl: teamObject[0].team_member_image.url,
                        name: teamObject[0].team_member_name,
                        team_member_position: teamObject[0].team_member_position,
                        toolTipContent: "<h3 class=\"team-member-name\">{name}</h3> <div class=\"team-member-position\">{team_member_position} </div>"

                    },
                    {
                        x: 2,
                        y: 50,
                        markerImageUrl: teamObject[1].team_member_image.url,
                        name: teamObject[1].team_member_name,
                        team_member_position: teamObject[1].team_member_position,
                        toolTipContent: "<h3 class=\"team-member-name\">{name}</h3> <div class=\"team-member-position\">{team_member_position} </div>"
                    },
                    {
                        x: 3,
                        y: 49,
                        markerImageUrl: teamObject[2].team_member_image.url,
                        name: teamObject[2].team_member_name,
                        team_member_position: teamObject[2].team_member_position,
                        toolTipContent: "<h3 class=\"team-member-name\">{name}</h3> <div class=\"team-member-position\">{team_member_position} </div>"
                    },
                    {
                        x: 4,
                        y: 44,
                        markerImageUrl: teamObject[3].team_member_image.url,
                        name: teamObject[3].team_member_name,
                        team_member_position: teamObject[3].team_member_position,
                        toolTipContent: "<h3 class=\"team-member-name\">{name}</h3> <div class=\"team-member-position\">{team_member_position} </div>"
                    },
                    {
                        x: 5,
                        y: 52,
                        markerImageUrl: teamObject[4].team_member_image.url,
                        name: teamObject[4].team_member_name,
                        team_member_position: teamObject[4].team_member_position,
                        toolTipContent: "<h3 class=\"team-member-name\">{name}</h3> <div class=\"team-member-position\">{team_member_position} </div>"
                    }
                ]
            }


            else {
                x = i + 1;
                y = ((i + 1) + 10) * 5;

                dataPoints.push({
                    // x: i - teamObject.length / 2,
                    x: x,
                    y: y,
                    markerImageUrl: teamObject[i].team_member_image.url,
                    name: teamObject[i].team_member_name,
                    team_member_position: teamObject[i].team_member_position,
                    toolTipContent: "<h3 class=\"team-member-name\">{name}</h3> <div class=\"team-member-position\">{team_member_position} </div>"
                });
            }


        }

        dataPoints.unshift({
            x: 0,
            y: 21,
            toolTipContent: ' '
        });
        dataPoints.push({
            x: limit + 1,
            y: 100,
            toolTipContent: ' '
        });
        dataSeries.dataPoints = dataPoints;
        data.push(dataSeries);


        var customMarkers = [];

        function addMarkerImages(chart) {
            for (var i = 0; i < chart.data[0].dataPoints.length; i++) {

                customMarkers.push($("<img>").attr({
                        src: chart.data[0].dataPoints[i].markerImageUrl,
                    })
                        .addClass('teamImage')
                        .appendTo($("#chartContainer>.canvasjs-chart-container"))
                );
            }

            $.each($('.teamImage'), function (index, el) {
                $(this).wrap('<div class="teamImageWrapper"></div>');
                positionMarkerImage(chart, $(this).parent(), index);
            })
        }


        function positionMarkerImage(chart, customMarker, index) {
            var pixelX = chart.axisX[0].convertValueToPixel(chart.options.data[0].dataPoints[index].x);
            var pixelY = chart.axisY[0].convertValueToPixel(chart.options.data[0].dataPoints[index].y);

            customMarker.css({
                "position": "absolute",
                "display": "block",
                "top": (pixelY + 7) - customMarker.height() / 2,
                "left": (pixelX + 20) - customMarker.width() / 2
            });


        }

        function hideMarker(chart) {
            for (var i = 0; i < chart.data[0].dataPoints.length; i++) {

                customMarkers[0].css("display", "none");
                customMarkers.slice(-1).pop().css("display", "none");

            }
        }

        // $(window).resize(function () {
        //     //     for (var i = 0; i < chart.data[0].dataPoints.length; i++) {
        //     //         positionMarkerImage(customMarkers[i], i);
        //     //     }
        //     // }


    </script>
    <script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


    <style>

        #chartContainer {
            overflow: hidden;
        }

        .canvasjs-chart-canvas {
            margin-left: -11px;
            width: 103%;
        }

        .canvasjs-chart-credit {
            display: none;
        }
    </style>
</div>


