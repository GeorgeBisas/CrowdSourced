var chart = echarts.init(document.getElementById('container'));
var ui_color = 'rgb(48, 170, 238)'
var ui_color_dark = 'rgb(4, 17, 23, 50)'
var ui_color_light = 'rgb(100, 200, 255)'

// Τoken (not public token)
mapboxgl.accessToken = "pk.eyJ1IjoiZWxlbWVudG1vIiwiYSI6ImNrM2Y4dm55MjAwNnczbG80M2hrZ3Q3dzEifQ._AmTHcuM701F6x6iBmt_yA";
var map = L.map('mymap');
//.setView([38.2462420, 21.7350847]);
L.tileLayer('https://api.mapbox.com/styles/v1/mapbox/streets-v10/tiles/256/{z}/{x}/{y}?', {
    maxZoom: 18,
    attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' + 'Imagery © <a href="http://mapbox.com">Mapbox</a>',
}).addTo(map);

function (userdata) {
 
                weiboData = weiboData.map(function (serieData, idx) {
                    var px = serieData[0] / 1000;
                    var py = serieData[1] / 1000;
                    var res = [[px, py, 1]];
 
                    for (var i = 2; i < serieData.length; i += 2) {
                        var dx = serieData[i] / 1000;
                        var dy = serieData[i + 1] / 1000;
                        var x = px + dx;
                        var y = py + dy;
                        res.push([x.toFixed(2), y.toFixed(2), 1]);
 
                        px = x;
                        py = y;
                    }
                    return res;
                });

var option = {
    mapbox3D: {
        style: "mapbox://styles/mapbox/streets-v10",
        center: [38.230462, 21.753150],
        pitch: 2,
        zoom: 3.9,            
    }, 
    //for show statistics of each category 
    tooltip: {
        trigger: 'item',
        formatter: "{a} <br/>{b}: {c} ({d}%)"
    },  
    legend: {
        
        data: ['STILL', 'VEHICLE', 'USING PHONE', 'RUN', 'WALK', 'BIKE', 'METRO']
    },
    xAxis: {
        type: 'category',
        data: []
    },
    yAxis: {
        scale: '100%',
        type: 'value',
        splitLine: {
            show: false
        },
    },
    //for show the linear diagramm with the map.In other case the diagramm will cover the map with x and y coondinates
    grid: [{
        show: true,
        left: 0,
        right: 0,
        top: window.innerHeight - 200,
        bottom: 0,
        borderColor: 'transparent',
    }],
    //for show the map and the points on the map
    series: [{
            name:'red',
            type: 'scatter3D',
            coordinateSystem: 'mapbox3D',
            symbolSize: 4,
            itemStyle: {
                        shadowBlur: 2,
                        shadowColor: 'rgba(255, 0, 0, 0.8)',
                        color: 'rgba(255, 0, 0, 0.8)'
                        },
                    }, 
					data: userdata[0],{
            name:'green',
            type: 'scatter3D',
            coordinateSystem: 'mapbox3D',
            symbolSize: 4,
            itemStyle: {
                        shadowBlur: 2,
                        shadowColor: 'rgba(0, 255, 0, 0.8)',
                        color: 'rgba(0, 255, 0, 0.8)'
                        },
                    }, 
					data: userdata[1],{
            name:'blue',
            type: 'scatter3D',
            coordinateSystem: 'mapbox3D',
            symbolSize: 4,
            itemStyle: {
                        shadowBlur: 2,
                        shadowColor: 'rgba(0, 0, 255, 0.8)',
                        color: 'rgba(0, 0, 255, 0.8)'
                        },
						data: userdata[2],
                    },
        //for linear diagramm
        {
            name: "accuracy",
            type: "line",
            smooth: true,
            symbol: 'none',
            itemStyle: {
                color: ui_color
            },
            areaStyle: {
                color: new echarts.graphic.LinearGradient(0, 0, 0, 1, [{
                    offset: 0,
                    color: ui_color
                }, {
                    offset: 1,
                    color: ui_color_dark
                }])
            },
            data: []
        },
        //for statistics diagramm
        {
            name: "Statistics",
            type: "pie",
            radius: ['8%', '16%'],
            center: ["190px", "160px"],
            avoidLabelOverlap: true,
            itemStyle: {
                normal: {
                    color: ui_color,
                    shadowBlur: 5
                }
            },
            label: {
                emphasis: {
                    show: true,
                    textStyle: {
                        fontSize: '18',
                        fontWeight: 'bold'
                    }
                }
            },
            data: []
        }
    ]
}
chart.setOption(option);

var map = chart.getModel().getComponent('mapbox3D').getMapbox();



window.addEventListener("mousewheel", function(event) {
    event.preventDefault();
}, { passive: false });
window.addEventListener("DOMMouseScroll", function(event) {
    event.preventDefault();
}, { passive: false });