/*
 * Author: Abdullah A Almsaeed
 * Date: 4 Jan 2014
 * Description:
 *      This is a demo file used only for the main dashboard (index.html)
 **/

/* global moment:false, Chart:false, Sparkline:false */

$(function () {

    // jvectormap data
    var visitorsData = {
        US: 398, // USA
        SA: 400, // Saudi Arabia
        CA: 1000, // Canada
        DE: 500, // Germany
        FR: 760, // France
        CN: 300, // China
        AU: 700, // Australia
        BR: 600, // Brazil
        IN: 800, // India
        GB: 320, // Great Britain
        RU: 3000 // Russia
    }

    $.ajax({
        url: $("#urltovisitors").data("target"),
        type: "GET",
        async: false,
        dataType: 'json',
        success: function (data) {
            visitorsData = data
        },
    });

    // World map by jvectormap
    $('#world-map').vectorMap({
        map: 'world_en',
        backgroundColor: 'transparent',
        regionStyle: {
            initial: {
                fill: "#e4e4e4",
                "fill-opacity": 1,
                stroke: "none",
                "stroke-width": 0,
                "stroke-opacity": 1,
            },
        },

        series: {
            regions: [{
                values: visitorsData,
                scale: ["#92c1dc", "#ebf4f9"],
                normalizeFunction: "polynomial",
            },],
        },

        onRegionLabelShow: function (e, el, code) {
            if (typeof visitorsData[code] != "undefined")
                el.html(el.html() + ": " + visitorsData[code] + " new visitors");
        },
    })
})
