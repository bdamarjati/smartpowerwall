try {

    Apex.tooltip = {
        theme: 'dark'
    }

    // Usage
    var usage = []; //[166, 168, 155, 178, 155, 170, 190, 160, 150, 170, 140, 170];
    var crnt = [];
    var freq = [];
    var charge = [165, 175, 162, 173, 160, 195, 160, 170, 160, 190, 180, 190];
    var load = [166, 168, 155, 178, 155, 170, 190, 160, 150, 170, 140, 170];
    var month = [300, 400, 600];

    // Realtime Data
    $.ajax({
        url: 'api/InverterDataB',
        success: function (data) {
            var mode = data.mode;
            var freq = data.freq;
            var volt = data.voltage;
            var amp = data.current;
            switch (mode) {
                case 1:
                    txtmode = "GRID";
                    document.getElementById('invmode').style.color = '#e7515a';
                    break;
                case 2:
                    txtmode = "INVERTER 1";
                    document.getElementById('invmode').style.color = '#fff';
                    break;
                case 3:
                    txtmode = "INVERTER 2";
                    break;
            }
            document.getElementById('invfreq').innerHTML = freq + " Hz";
            document.getElementById('invvolt').innerHTML = volt + " Volt";
            document.getElementById('invamp').innerHTML = amp.toFixed(2) + " A";
            document.getElementById('invmode').innerHTML = txtmode;
        }
    });


    // Updating Chart
    // var Toggle = setInterval(UpdateChart, 3000);
    var Toggle = setInterval(getChartData, 3000);

    function getChartData() {
        //
        $.ajax({
            url: 'api/InverterGraph',
            success: function (data) {
                // usage.push(data.data);
                // document.getElementById('txtdebug').innerHTML = data.data;
                chart1.updateOptions({
                    series: [{
                        name: 'Usages',
                        data: data.data
                    }],
                });
                month[0] = data.time[0];
                month[1] = data.time[1];
                month[2] = data.time[2];
                month[3] = data.time[3];
                month[4] = data.time[4];
                month[5] = data.time[5];
                month[6] = data.time[6];
                month[7] = data.time[7];
                month[8] = data.time[8];
                month[9] = data.time[9];
                month[10] = data.time[10];
                month[11] = data.time[11];
                // month.push(data.time[0])
                // document.getElementById('debug').innerHTML = month;
            }
        });
        $.ajax({
            url: 'api/InverterGraphB',
            success: function (data) {
                // usage.push(data.data);
                // document.getElementById('txtdebug').innerHTML = data.data;
                chart2.updateOptions({
                    series: [{
                        name: 'Current',
                        data: data.data
                    }],
                });
                // month.push(data.time[0])
            }
        });
        $.ajax({
            url: 'api/InverterGraphC',
            success: function (data) {
                // usage.push(data.data);
                // document.getElementById('txtdebug').innerHTML = data.data;
                chart3.updateOptions({
                    series: [{
                        name: 'Frequency',
                        data: data.data
                    }],
                });
                // month.push(data.time[0])
            }
        });
    }

    var options1 = {
        chart: {
            fontFamily: 'Nunito, sans-serif',
            height: 365,
            type: 'area',
            zoom: {
                enabled: false
            },
            dropShadow: {
                enabled: true,
                opacity: 0.3,
                blur: 5,
                left: -7,
                top: 22
            },
            toolbar: {
                show: false
            },
            events: {
                mounted: function (ctx, config) {
                    const highest1 = ctx.getHighestValueInSeries(0);
                    const highest2 = ctx.getHighestValueInSeries(1);
                },
            }
        },
        colors: ['#009688'],
        dataLabels: {
            enabled: false
        },
        markers: {
            discrete: [{
                seriesIndex: 0,
                dataPointIndex: 7,
                fillColor: '#000',
                strokeColor: '#000',
                size: 5
            }]
        },
        stroke: {
            show: true,
            curve: 'smooth',
            width: 2,
            lineCap: 'square'
        },
        series: {
            name: 'Usages',
            data: usage
        },
        labels: month, //['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L'], //month,
        xaxis: {
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false
            },
            crosshairs: {
                show: true
            },
            labels: {
                offsetX: 0,
                offsetY: 5,
                style: {
                    fontSize: '12px',
                    fontFamily: 'Nunito, sans-serif',
                    cssClass: 'apexcharts-xaxis-title',
                },
            }
        },
        yaxis: {
            labels: {
                formatter: function (value, index) {
                    return value
                },
                offsetX: -22,
                offsetY: 0,
                style: {
                    fontSize: '12px',
                    fontFamily: 'Nunito, sans-serif',
                    cssClass: 'apexcharts-yaxis-title',
                },
            }
        },
        grid: {
            borderColor: '#191e3a',
            strokeDashArray: 5,
            xaxis: {
                lines: {
                    show: true
                }
            },
            yaxis: {
                lines: {
                    show: false,
                }
            },
            padding: {
                top: 0,
                right: 0,
                bottom: 0,
                left: -10
            },
        },
        legend: {
            position: 'top',
            horizontalAlign: 'right',
            offsetY: -50,
            fontSize: '16px',
            fontFamily: 'Nunito, sans-serif',
            markers: {
                width: 10,
                height: 10,
                strokeWidth: 0,
                strokeColor: '#fff',
                fillColors: undefined,
                radius: 12,
                onClick: undefined,
                offsetX: 0,
                offsetY: 0
            },
            itemMargin: {
                horizontal: 0,
                vertical: 20
            }
        },
        tooltip: {
            theme: 'dark',
            marker: {
                show: true,
            },
            x: {
                show: false,
            }
        },
        fill: {
            type: "gradient",
            gradient: {
                type: "vertical",
                shadeIntensity: 1,
                inverseColors: !1,
                opacityFrom: .28,
                opacityTo: .05,
                stops: [45, 100]
            }
        },
        responsive: [{
            breakpoint: 575,
            options: {
                legend: {
                    offsetY: -30,
                },
            },
        }]
    }

    var options2 = {
        chart: {
            fontFamily: 'Nunito, sans-serif',
            height: 365,
            type: 'area',
            zoom: {
                enabled: false
            },
            dropShadow: {
                enabled: true,
                opacity: 0.3,
                blur: 5,
                left: -7,
                top: 22
            },
            toolbar: {
                show: false
            },
            events: {
                mounted: function (ctx, config) {
                    const highest1 = ctx.getHighestValueInSeries(0);
                    const highest2 = ctx.getHighestValueInSeries(1);
                },
            }
        },
        colors: ['#1b55e2'],
        dataLabels: {
            enabled: false
        },
        markers: {
            discrete: [{
                seriesIndex: 0,
                dataPointIndex: 7,
                fillColor: '#000',
                strokeColor: '#000',
                size: 5
            }]
        },
        stroke: {
            show: true,
            curve: 'smooth',
            width: 2,
            lineCap: 'square'
        },
        series: {
            name: 'Current',
            data: crnt
        },
        labels: month,
        xaxis: {
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false
            },
            crosshairs: {
                show: true
            },
            labels: {
                offsetX: 0,
                offsetY: 5,
                style: {
                    fontSize: '12px',
                    fontFamily: 'Nunito, sans-serif',
                    cssClass: 'apexcharts-xaxis-title',
                },
            }
        },
        yaxis: {
            labels: {
                formatter: function (value, index) {
                    return value
                },
                offsetX: -22,
                offsetY: 0,
                style: {
                    fontSize: '12px',
                    fontFamily: 'Nunito, sans-serif',
                    cssClass: 'apexcharts-yaxis-title',
                },
            }
        },
        grid: {
            borderColor: '#191e3a',
            strokeDashArray: 5,
            xaxis: {
                lines: {
                    show: true
                }
            },
            yaxis: {
                lines: {
                    show: false,
                }
            },
            padding: {
                top: 0,
                right: 0,
                bottom: 0,
                left: -10
            },
        },
        legend: {
            position: 'top',
            horizontalAlign: 'right',
            offsetY: -50,
            fontSize: '16px',
            fontFamily: 'Nunito, sans-serif',
            markers: {
                width: 10,
                height: 10,
                strokeWidth: 0,
                strokeColor: '#fff',
                fillColors: undefined,
                radius: 12,
                onClick: undefined,
                offsetX: 0,
                offsetY: 0
            },
            itemMargin: {
                horizontal: 0,
                vertical: 20
            }
        },
        tooltip: {
            theme: 'dark',
            marker: {
                show: true,
            },
            x: {
                show: false,
            }
        },
        fill: {
            type: "gradient",
            gradient: {
                type: "vertical",
                shadeIntensity: 1,
                inverseColors: !1,
                opacityFrom: .28,
                opacityTo: .05,
                stops: [45, 100]
            }
        },
        responsive: [{
            breakpoint: 575,
            options: {
                legend: {
                    offsetY: -30,
                },
            },
        }]
    }

    var options3 = {
        chart: {
            fontFamily: 'Nunito, sans-serif',
            height: 365,
            type: 'area',
            zoom: {
                enabled: false
            },
            dropShadow: {
                enabled: true,
                opacity: 0.3,
                blur: 5,
                left: -7,
                top: 22
            },
            toolbar: {
                show: false
            },
            events: {
                mounted: function (ctx, config) {
                    const highest1 = ctx.getHighestValueInSeries(0);
                    const highest2 = ctx.getHighestValueInSeries(1);
                },
            }
        },
        colors: ['#e7515a'],
        dataLabels: {
            enabled: false
        },
        markers: {
            discrete: [{
                seriesIndex: 0,
                dataPointIndex: 7,
                fillColor: '#000',
                strokeColor: '#000',
                size: 5
            }]
        },
        stroke: {
            show: true,
            curve: 'smooth',
            width: 2,
            lineCap: 'square'
        },
        series: {
            name: 'Frequency',
            data: freq
        },
        labels: month,
        xaxis: {
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false
            },
            crosshairs: {
                show: true
            },
            labels: {
                offsetX: 0,
                offsetY: 5,
                style: {
                    fontSize: '12px',
                    fontFamily: 'Nunito, sans-serif',
                    cssClass: 'apexcharts-xaxis-title',
                },
            }
        },
        yaxis: {
            labels: {
                formatter: function (value, index) {
                    return value
                },
                offsetX: -22,
                offsetY: 0,
                style: {
                    fontSize: '12px',
                    fontFamily: 'Nunito, sans-serif',
                    cssClass: 'apexcharts-yaxis-title',
                },
            }
        },
        grid: {
            borderColor: '#191e3a',
            strokeDashArray: 5,
            xaxis: {
                lines: {
                    show: true
                }
            },
            yaxis: {
                lines: {
                    show: false,
                }
            },
            padding: {
                top: 0,
                right: 0,
                bottom: 0,
                left: -10
            },
        },
        legend: {
            position: 'top',
            horizontalAlign: 'right',
            offsetY: -50,
            fontSize: '16px',
            fontFamily: 'Nunito, sans-serif',
            markers: {
                width: 10,
                height: 10,
                strokeWidth: 0,
                strokeColor: '#fff',
                fillColors: undefined,
                radius: 12,
                onClick: undefined,
                offsetX: 0,
                offsetY: 0
            },
            itemMargin: {
                horizontal: 0,
                vertical: 20
            }
        },
        tooltip: {
            theme: 'dark',
            marker: {
                show: true,
            },
            x: {
                show: false,
            }
        },
        fill: {
            type: "gradient",
            gradient: {
                type: "vertical",
                shadeIntensity: 1,
                inverseColors: !1,
                opacityFrom: .28,
                opacityTo: .05,
                stops: [45, 100]
            }
        },
        responsive: [{
            breakpoint: 575,
            options: {
                legend: {
                    offsetY: -30,
                },
            },
        }]
    }

    var chart1 = new ApexCharts(
        document.querySelector("#chartInvVolt"),
        options1
    );
    var chart2 = new ApexCharts(
        document.querySelector("#chartInvAmp"),
        options2
    );
    var chart3 = new ApexCharts(
        document.querySelector("#chartInvFreq"),
        options3
    );
    chart1.render();
    chart2.render();
    chart3.render();

    const ps = new PerfectScrollbar(document.querySelector('.mt-container'));
} catch (e) {
    console.log(e);
}
