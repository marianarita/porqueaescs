

/*=============================================
=                  NAVEGACAO                  =
=============================================*/
var color = '#ffffff'

$(document).ready(function () {
    //Navegação principal
    $('section').eq(0).addClass('visible');
    $('.navbar').on('click', 'a', function () {
        $('.navbar-item-active').removeClass('navbar-item-active')
        $(this).addClass('navbar-item-active')
        $('.current').removeClass('current');
        $('.slidernav-active').removeClass('slidernav-active');
        $('[data-graph="1"]').addClass('current');
        $('[data-graph-nav="1"]').addClass('slidernav-active')
        $('.sidenav-item').css({
            backgroundColor: $('.current').attr('data-graphcolor')
        })
        $('a').css({
            color: $('.current').attr('data-graphcolor')
        })
        $('.text-red-light').css({
            color: $('.current').attr('data-graphcolor')
        })
        $('.slidernav-item').css({
            backgroundColor: $('.current').attr('data-graphcolor')
        })
        $($(this).attr('href')).addClass('visible').siblings('section:visible').removeClass('visible');
        $('.visible').each(function (i) {
            var id = $(this).attr('id');
            $('.sidenav-item').removeClass('sidenav-active');
            $('[data-section="' + id + '"]').attr('data-color');
            $('a').css({
                color: $('[data-section="' + id + '"]').attr('data-color')
            })
            $('.sidenav-item').css({
                backgroundColor: $('[data-section="' + id + '"]').attr('data-color')
            })
            $('[data-section="' + id + '"]').addClass('sidenav-active');
        })
    });
    $('.sidenav').on('click', '.sidenav-item', function () {
        //console.log(this);
        $('section:visible').removeClass('visible');
        $('.sidenav-item').removeClass('sidenav-active');
        var id = $(this).attr('data-section');
        //console.log(id)
        //debugger;   
        $('[data-sectionid="' + id + '"]').addClass('visible');
        $('[data-section="' + id + '"]').attr('data-color');
        $('a').css({
            color: $('[data-section="' + id + '"]').attr('data-color')
        })
        $('.sidenav-item').css({
            backgroundColor: $('[data-section="' + id + '"]').attr('data-color')
        })
        $('[data-section="' + id + '"]').addClass('sidenav-active');
        $('.navbar-item-active').removeClass('navbar-item-active')
        $('.navbar').find('[href="' + '#' + id + '"]').addClass('navbar-item-active');
        $('.current').removeClass('current');
        $('.slidernav-active').removeClass('slidernav-active');
        $('[data-graph="1"]').addClass('current');
        $('[data-graph-nav="1"]').addClass('slidernav-active')
    });
//Mexer o logo
var factor = 150;
$(".section-1-bg").mousemove(function (e) {
    var width = $(this).innerWidth();
    var height = $(this).innerHeight();
    var newX = 10 - (e.pageX - width / 2) / factor;
    var newY = 50 - (e.pageY - height / 2) / factor;
    $(this).css('background-position', newX + '%' + ' ' + newY + '%');
});
    //seguinte
    $("#next").click(function () {
        var graphid = $('.current').next().attr('data-graph');
        $('.slidernav-active').removeClass('slidernav-active');
        $('[data-graph-nav="' + graphid + '"]').addClass(' slidernav-active');
        if ($(".current").next(".graph").length) {
            $(".current").removeClass("current").next(".graph").addClass("current");
            $('.graph-title').text($(".current").attr('data-sectiontitle'));
            $('.sidenav-item').css({
                backgroundColor: $('.current').attr('data-graphcolor')
            })
            $('a').css({
                color: $('.current').attr('data-graphcolor')
            })
            $('.text-red-light').css({
                color: $('.current').attr('data-graphcolor')
            })
            $('.slidernav-item').css({
                backgroundColor: $('.current').attr('data-graphcolor')
            })
            if ($(".current").next(".graph").length == 0) {
                $('.slider-next').fadeOut(200);
            }
            if ($('.slider-prev').css('display') == 'none') {
                $('.slider-prev').fadeIn(200);
            }
        };
    });
    $('.slider-prev').css({
        display: 'none'
    });
    $("#prev").click(function () {
        var graphid = $('.current').prev().attr('data-graph');
        $('.slidernav-active').removeClass('slidernav-active');
        $('[data-graph-nav="' + graphid + '"]').addClass(' slidernav-active');
        if ($(".current").prev(".graph").length) {
            $(".current").removeClass("current").prev(".graph").addClass("current");
            $('.graph-title').text($(".current").attr('data-sectiontitle'));
            $('.sidenav-item').css({
                backgroundColor: $('.current').attr('data-graphcolor')
            })
            $('a').css({
                color: $('.current').attr('data-graphcolor')
            })
            $('.text-red-light').css({
                color: $('.current').attr('data-graphcolor')
            })
            $('.slidernav-item').css({
                backgroundColor: $('.current').attr('data-graphcolor')
            })
            if ($(".current").prev(".graph").length == 0) {
                $('.slider-prev').fadeOut(200);
            }
            if ($('.slider-next').css('display') == 'none') {
                $('.slider-next').fadeIn(200);
            }
        }
    });
    $('.slidernav-item').on('click', function () {
        var graphid = $(this).attr('data-graph-nav');
        $('.slidernav-active').removeClass('slidernav-active');
        $('.current').removeClass('current');
        $('[data-graph-nav="' + graphid + '"]').addClass(' slidernav-active');
        $('[data-graph="' + graphid + '"]').addClass('current');
        $('.graph-title').text($(".current").attr('data-sectiontitle'));
        $('.sidenav-item').css({
            backgroundColor: $('.current').attr('data-graphcolor')
        })
        $('a').css({
            color: $('.current').attr('data-graphcolor')
        })
        $('.text-red-light').css({
            color: $('.current').attr('data-graphcolor')
        })
        $('.slidernav-item').css({
            backgroundColor: $('.current').attr('data-graphcolor')
        })
    });


	/* $('#navegar').on('click', function () {
	     $('.navbar').children()[1].click();
	 })*/
    $('.btn').on('click', function () {
        var sectionid = $(this).attr('href');
        $('.navbar').find('[href="' + sectionid + '"]').click()
    })
    $('.switch-label').click(function () {
        if ($(this).data('count')) {
            $(this).data('count', $(this).data('count') + 1);
        } else {
            $(this).data('count', 1);
        }
        console.log($(this).data('count'));
        if ($(this).data('count') == 10) {
            alert('Dum Dum DUM! Another One Bites The Dust!');
        }
    });
    //Navegacao com teclas
    $(document).keydown(function (e) {
        if (e.keyCode == 39 || e.keyCode == 40) {
            //alert('direita')
            $(".navbar-item-active").next().click();
        }
        if (e.keyCode == 37 || e.keyCode == 38) {
            //alert('esquerda')
            $(".navbar-item-active").prev().click();
        }
    });
    //scroll
    
	$(window).bind('mousewheel', function(event) {
		if (event.originalEvent.wheelDelta >= 0) {
			//alert('Scroll cima');
			$(".navbar-item-active").prev().click();
		} else {
			//alert('Scroll baixo');
			$(".navbar-item-active").next().click();
		}
	});
    console.log("%c L(a)INDO!", "font-weight: bold; font-size: 50px;color: red; text-shadow: 3px 3px 0 rgb(217,31,38) , 6px 6px 0 rgb(226,91,14) , 9px 9px 0 rgb(245,221,8) , 12px 12px 0 rgb(5,148,68) , 15px 15px 0 rgb(2,135,206) , 18px 18px 0 rgb(4,77,145) , 21px 21px 0 rgb(42,21,113)");
});

/*=====  End of NAVEGACAO  ======*/




/*=============================================
=                GRAFICO Q1/Q2                =
=============================================*/
/* CHAMADA AJAX GUARDADA NUMA VAR*/
var resultsQ1 = $.ajax({
    type: 'GET',
    url: 'q1-2.php',
    data: {
        variable: 'value'
    },
    dataType: 'json',
    async: false,
}).responseJSON;
//console.log(resultsQ1);
// Code goes here
var width = 300,
    height = 300,
    padding = 1.5, // separation between same-color nodes
    clusterPadding = 16, // separation between different-color nodes
    maxRadius = 24;
var n = 100, // total number of nodes
    m = 2; // number of distinct clusters
var clusters = new Array(m);
var nodes = [];
// get the json data from the file
function drawGraph(data) {
    for (var i = 0; i < data.length; i++) {
        var obj = data[i];
        for (var key in obj) {
            var answers = obj['answers']; // answers
            var r = answers * 2; // radius
            var n = obj['age']; // age
            var div = obj['gender']; // division
            d = {
                cluster: div,
                radius: r,
                age: n,
                division: div,
                answers: answers
            };
            // d = {cluster: div, radius: r};
            // console.log(key+"="+obj[key]);
        }
        if (!clusters[i] || (r > clusters[i].radius)) clusters[i] = d;
        nodes.push(d);
        // console.log(d);
    }
    // Use the pack layout to initialize node positions.
    d3.layout.pack().sort(null).size([width, height]).children(function (d) {
        return d.values;
    }).value(function (d) {
        return d.radius * d.radius;
    }).nodes({
        values: d3.nest().key(function (d) {
            return d.cluster;
        }).entries(nodes)
    });
    var force = d3.layout.force().nodes(nodes).size([width, height]).gravity(.03).charge(0).on("tick", tick).start();
    var svg = d3.select("#q1-2").append("svg").attr("width", width).attr("height", height).attr("class", "canvas-q1");
    // console.log(nodes)
    var tooltip = d3.select("#q1-2").append("div").attr("class", "my-tooltip") //add the tooltip class
        .style("position", "absolute").style("z-index", "10").style("display", "none").style("pointer-events", "none")
    tooltip.append("div").attr("id", "tooltip-title").text("simple");
    tooltip.append("div").attr("id", "tooltip-text")
    var node = svg.selectAll("g").data(nodes).enter().append("g").call(force.drag)
    node.on("mousemove", function (d, i) {
        // console.log(d3.event,i)
        tooltip.style("opacity", .9).style("left", (d3.event.layerX) + "px").style("top", (d3.event.layerY) + "px").style("display", 'block')
        tooltip.select('#tooltip-title').text("Inquiridos do sexo " + (d.division) + " com " + (d.age) + " anos")
        tooltip.select('#tooltip-text').text("Respostas: " + (d.answers))
    }).on("mouseout", function (d) {
        //console.log(d);
        tooltip.style("opacity", 0);
    });
    var cores = {
        masculino: "#be1428",
        feminino: "#e26477"
    }
    var circles = node.append("circle").style("fill", function (d) {
        //console.log(color(d.cluster));
        return cores[d.cluster];
    })
    //add text to the group    
    node.append("text").text(function (d) {
        return d.age;
    }).attr("dx", -10).text(function (d) {
        return d.age
    })
    node.selectAll("circle").transition().duration(750).delay(function (d, i) {
        return i * 5;
    }).attrTween("r", function (d) {
        var i = d3.interpolate(0, d.radius);
        return function (t) {
            return d.radius = i(t);
        };
    });

    function tick(e) {
        node.each(cluster(10 * e.alpha * e.alpha)).each(collide(.5)).attr("transform", function (d) {
            var k = "translate(" + d.x + "," + d.y + ")";
            return k;
        })
    }
    // Move d to be adjacent to the cluster node.
    function cluster(alpha) {
        return function (d) {
            var cluster = clusters[d.index];
            if (cluster === d) return;
            var x = d.x - cluster.x,
                y = d.y - cluster.y,
                l = Math.sqrt(x * x + y * y),
                r = d.radius + cluster.radius;
            if (l != r) {
                l = (l - r) / l * alpha;
                d.x -= x *= l;
                d.y -= y *= l;
                cluster.x += x;
                cluster.y += y;
            }
        };
    }
    // Resolves collisions between d and all other circles.
    function collide(alpha) {
        var quadtree = d3.geom.quadtree(nodes);
        return function (d) {
            var r = d.radius + maxRadius + Math.max(padding, clusterPadding),
                nx1 = d.x - r,
                nx2 = d.x + r,
                ny1 = d.y - r,
                ny2 = d.y + r;
            quadtree.visit(function (quad, x1, y1, x2, y2) {
                if (quad.point && (quad.point !== d)) {
                    var x = d.x - quad.point.x,
                        y = d.y - quad.point.y,
                        l = Math.sqrt(x * x + y * y),
                        r = d.radius + quad.point.radius + (d.cluster === quad.point.cluster ? padding : clusterPadding);
                    if (l < r) {
                        l = (l - r) / l * alpha;
                        d.x -= x *= l;
                        d.y -= y *= l;
                        quad.point.x += x;
                        quad.point.y += y;
                    }
                }
                return x1 > nx2 || x2 < nx1 || y1 > ny2 || y2 < ny1;
            });
        };
    }
};

/*=====  End of GRAFICO Q1/Q2  ======*/

   /*=============================================
    =                  GRAFICO Q3                 =
    =============================================*/

function drawQ3(color) {
    /* CHAMADA AJAX GUARDADA NUMA VAR */
    var resultsQ3 = $.ajax({
        type: 'GET',
        url: 'q3.php',
        data: { variable: 'value' },
        dataType: 'json',
        async: false,
    }).responseJSON;


    /* PROCESSAMENTO DO OBJETO PARA FILTRAR ALGUNS RESULTADOS */
    var labels = resultsQ3.map(function (e) {
        return e.answer_text;
    });
    var data = resultsQ3.map(function (e) {
        return e.answer_value;
    });

    /* CONFIGS DO GRAFICO */

    var configQ3 = {
        type: 'horizontalBar',
        data: {
            datasets: [{
                label: 'respostas',
                data: data,
                backgroundColor: '#be1428',
            }],
            labels: labels,
        },
        options: {
            tooltips: {
                title: "'Roboto', 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif",
                bodyFontFamily: "'Roboto', 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif",
                titleFontSize: 14,
                bodyFontSize: 14,
            },
            elements: {
                rectangle: {
                    borderWidth: 0,
                }
            },
            responsive: true,
            legend: {
                display: false,
                position: 'right',
                labels: {
                    fontColor: "red",
                    fontSize: 18
                }
            },
            title: {
                display: false,
                text: 'Escolhas'
            },

            scales: {
                xAxes: [{
                    ticks: {
                        beginAtZero: true,
                        fixedStepSize: 10,
                        fontColor: color,
                        color: color,
                    },
                    gridLines: {
                        display: false,
                        color: color

                    },

                }],
                yAxes: [{
                    ticks: {
                        fontSize: 14,
                        fontColor: color
                    },
                    gridLines: {
                        display: false
                    },
                }]
            }
        }
    };


    var q3 = document.getElementById('q3').getContext('2d');
    return new Chart(q3, configQ3);
        /*=====  End of GRAFICO Q3  ======*/


}


/*=============================================
=                 GRAFICO Q4                  =
=============================================*/


function drawQ4(color) {
    /* CHAMADA AJAX GUARDADA NUMA VAR*/
    var resultsQ4 = $.ajax({
        type: 'GET',
        url: 'q4.php',
        data: { variable: 'value' },
        dataType: 'json',
        async: false,
    }).responseJSON;


    /* PROCESSAMENTO DO OBJETO PARA FILTRAR ALGUNS RESULTADOS */
    var labels = resultsQ4.map(function (e) {
        return e.answer_text;
    });
    var data = resultsQ4.map(function (e) {
        return e.answer_value;
    });

    /* CONFIGS DO GRAFICO */
    var configQ4 = {
        type: 'radar',
        data: {
            datasets: [{
                label: 'respostas',
                data: data,
                borderWidth: 4,
                backgroundColor: "rgb(233, 166, 13)",
                borderColor: 'rgba(0, 0, 0, 0)',
                pointBackgroundColor: "#ffbe3b",
                pointBorderColor: "#ffbe3b",
                pointHoverBackgroundColor: "#fff",
                pointHoverBorderColor: "rgba(179,181,198,1)",
                pointRadius: 6,
                pointHoverRadius: 6,
            }],
            labels: labels,
        },
        options: {
            tooltips: {
                title: "'Roboto', 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif",
                bodyFontFamily: "'Roboto', 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif",
                titleFontSize: 14,
                bodyFontSize: 14,
            },
            responsive: true,
            maintainAspectRatio: true,
            spanGaps: false,
            elements: {
                line: {
                    tension: 0.0000001
                }
            },
            legend: {
                display: false,
                position: 'right',
            },
            title: {
                display: false,
                text: 'Radar'
            },
            scale: {
                angleLines: {
                    color: color
                },
                ticks: {
                    beginAtZero: true,
                    fontColor: color, // AQUI É A COR
                    display: false,

                },
                pointLabels: {
                    fontColor: color, // AQUI É A COR
                    fontSize: 11,
                },
                reverse: false,
                gridLines: {
                    circular: true,
                    color: color,
                }
            },
            animation: {
                animateRotate: false,
                animateScale: true
            }
        }
    };

    var q4 = $('#q4')[0].getContext('2d');
    return new Chart(q4, configQ4);
}


/*=====  End of GRAFICO Q4  ======*/

/*=============================================
=                 GRAFICO Q5                  =
=============================================*/

function drawQ5(color){

/* CHAMADA AJAX GUARDADA NUMA VAR*/
var resultsQ5 = $.ajax({
    type: 'GET',
    url: 'q5.php',
    data: { variable: 'value' },
    dataType: 'json',
    async: false,
}).responseJSON;


/* PROCESSAMENTO DO OBJETO PARA FILTRAR ALGUNS RESULTADOS */
var labels = resultsQ5.map(function (e) {
    return e.answer_text;
});
var data = resultsQ5.map(function (e) {
    return e.answer_value;
});

/* CONFIGS DO GRAFICO */
var configQ5 = {
    data: {
        datasets: [{
            data: data,
            borderWidth: 2,
            backgroundColor: ["#e9a60d", "#ef6f6f", "#007382", "#be1428", "#023e44", "#ffc76c", "#3caab4", "#001f3f", "#e9a60d", "#ef6f6f", "#007382", "#be1428", "#023e44", "#ffc76c", "#e9a60d"],
        }],
        labels: labels,
    },
    options: {
        tooltips: {
            title: "'Roboto', 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif",
            bodyFontFamily: "'Roboto', 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif",
            titleFontSize: 14,
            bodyFontSize: 14,
        },
        responsive: true,
        elements: {
            arc: {
                borderWidth: .5
            }
        },
        legend: {
            position: 'right',
            labels: {
                fontColor: color
            }
        },
        title: {
            display: true
        },
        scale: {
            ticks: {
                beginAtZero: true,
                fontColor: color, // AQUI É A COR
                display: false
            },
            reverse: false,
            gridLines: {
                color: color,
            }
        },
        animation: {
            animateRotate: false,
            animateScale: true
        }
    }
};

var q5 = $('#q5')[0].getContext('2d');
return  Chart.PolarArea(q5, configQ5);


}
/*=====  End of GRAFICO Q5  ======*/



/*=============================================
=                 GRAFICO Q6                  =
=============================================*/

function drawQ6(){

/* CHAMADA AJAX GUARDADA NUMA VAR*/
var resultsQ6 = $.ajax({
    type: 'GET',
    url: 'q6.php',
    data: { variable: 'value' },
    dataType: 'json',
    async: false,
}).responseJSON;


/* PROCESSAMENTO DO OBJETO PARA FILTRAR ALGUNS RESULTADOS */
var labels = resultsQ6.map(function (e) {
    return e.answer_text;
});
var data = resultsQ6.map(function (e) {
    return e.answer_value;
});

/* CONFIGS DO GRAFICO */
var configQ6 = {
    type: 'doughnut',
    data: {
        datasets: [{
            data: data,
            backgroundColor: ["#8c1010", "#e9a60d", "#ef6f6f", "#007382", "#896628", "#be1428", "#6a8f91", "#023e44", "#ffc76c", "#3caab4", "#3d000c", "#002b2b", "#ba6a00", "#b78a8a", "#964040", "#586c6d", "#be1428", "#9bc4c4", "#b29569"],
        }],
        labels: labels,
    },
    options: {
        tooltips: {
            title: "'Roboto', 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif",
            bodyFontFamily: "'Roboto', 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif",
            titleFontSize: 14,
            bodyFontSize: 14,
        },
        responsive: true,
        legend: {
            position: 'bottom',
            display: false,
            labels: {
                fontColor: '#f000000',
            }
        },
        title: {
            display: false
        },
        animation: {
            animateScale: true,
            animateRotate: true
        },
        elements: {
            arc: {
                borderWidth: .5
            }
        },

    }

};

var q6 = $('#q6')[0].getContext('2d');
window.myDoughnut = new Chart(q6, configQ6);

}
/*=====  End of GRAFICO Q6  ======*/


/*=============================================
=                 CALL GRAPHS                 =
=============================================*/

window.onload = function () {
    drawGraph(resultsQ1);
    drawQ3("white")
    drawQ4("white")
    drawQ5("white")
    drawQ6()
}

/*=====  End of CALL GRAPHS  ======*/



function changeColor(color) {
    drawQ3(color);
    drawQ4(color);
    drawQ5(color);
}

$("#switch").change(function () {
    if (this.checked) {
        changeColor('#000000')
        $('h1, h2, h3, h4, h5, h6').css({
            color: 'black'
        })
        $('h2').css({
            color: 'black'
        })
        $('blockquote').css({
            color: 'black'
        })
        $('.btn').css({
            borderColor: 'black'
        })
        $('p').css({
            color: 'black'
        })
        $('body').css({
            backgroundColor: 'white'
        })
        $('.sol').stop().fadeOut(300, function () {
            $('.lua').fadeIn()
        });
        $('.nav-logo').css({
            filter: 'invert(100)'
        })
        $('.section-1-bg').css({filter: 'invert(100%)'})

        $('.news-description p').css({color: 'black !important'})
    } else {
        $('.news-description p').css({color: 'black !important'})

        changeColor('#ffffff')
        $('.section-1-bg').css({filter: 'invert(0%)'})

        $('h1, h2, h3, h4, h5, h6').css({
            color: 'white'
        })
        $('h2').css({
            color: 'white'
        })
        $('blockquote').css({
            color: 'white'
        })
        $('.btn').css({
            borderColor: 'white'
        })
        $('p').css({
            color: 'white'
        })
        $('body').css({
            backgroundColor: 'var(--bg-blue)'
        })
        $('.lua').stop().fadeOut(300, function () {
            $('.sol').fadeIn()
        });
        $('.nav-logo').css({
            filter: 'invert(0)'
        })
    }
});


$.ajax({
    type: 'GET',
    url: 'feed.xml',
    dataType: 'xml',
    error: function (xhr) {
        alert('não deu')
    },
    success: function (xml) {
        //console.log(xml);
        var channel = $('channel', xml).eq(0);
        //console.log(channel);
        var items = [];
        $('item', xml).each(function () {
            var item = {};
            item.title = $(this).find('title').eq(0).text();
            item.link = $(this).find('link').eq(0).text();
            item.description = $(this).find('description').eq(0).text();
            item.date = $(this).find('pubDate').eq(0).text();
            item.image =$(this).find('content\\:encoded')[0].textContent.match(/src="(.*)" alt/)[1]
            //debugger;

            $('#news-wrapper').append('<div class="news-block-wrapper"><div class="hidden">'+item.image+'</div><div class="news-block" style="background-color: white"> <div class="news-image" style="background-image:url('+item.image +')"> </div> <div class="news-description">' + item.description + ' </div> <a href="' + item.link + '" class="news-readmore" target="_blank">Ler mais</a> </div></div>');
           
        });

        $("#news-wrapper > div:gt(0)").hide();

        setInterval(function () {
            $('#news-wrapper > div:first')
                fadeOut(1000)
                .next()
                .fadeIn(1000)
                .end()
                .appendTo('#news-wrapper');
        }, 4000);

        /*
         var i;
         for (i = 0; i < items.length; ++i) {
             $('.news-block-wrapper').on('click', function(){
                 console.log($(this));
                 $(this).fadeOut(200);
             })
         }*/

    }
})


