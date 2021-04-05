try {

    Apex.tooltip = {
        theme: 'dark'
    }

    // Usage
    var usage = [16600, 16800, 15500, 17800, 15500, 17000, 19000, 16000, 15000, 17000, 14000, 17000];
    var charge = [16500, 17500, 16200, 17300, 16000, 19500, 16000, 17000, 16000, 19000, 18000, 19000];
    var month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

    //Updating Chart
    var Toggle = setInterval(UpdateChart, 3000);

    function UpdateChart() {
        var newusage = Math.floor(Math.random() * 20000) + 10000;
        var newcharge = Math.floor(Math.random() * 20000) + 10000;
        var newload = Math.floor(Math.random() * 20000) + 10000;

        usage.shift();
        usage.push(newusage);
        charge.shift();
        charge.push(newcharge);

        var thismonth = month[0];
        month.shift();
        month.push(thismonth);

        chart1.updateOptions({
            series: [{
                name: 'Usages',
                data: usage
            }],
        });

        chart2.updateOptions({
            series: [{
                name: 'Usages',
                data: usage
            }],
        });

        chart3.updateOptions({
            series: [{
                name: 'Usages',
                data: usage
            }],
        });

        chart.updateOptions({
            series: [newusage, newcharge, newload]
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
                    return (value / 1000) + 'K'
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
            name: 'Usages',
            data: usage
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
                    return (value / 1000) + 'K'
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
            name: 'Usages',
            data: usage
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
                    return (value / 1000) + 'K'
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
        document.querySelector("#usageMonthly"),
        options1
    );
    var chart2 = new ApexCharts(
        document.querySelector("#usageMonthlyB"),
        options2
    );
    var chart3 = new ApexCharts(
        document.querySelector("#usageMonthlyC"),
        options3
    );
    chart1.render();
    chart2.render();
    chart3.render();

    const ps = new PerfectScrollbar(document.querySelector('.mt-container'));
} catch (e) {
    console.log(e);
}
