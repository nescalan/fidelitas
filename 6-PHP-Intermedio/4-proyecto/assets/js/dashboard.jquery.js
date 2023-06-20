$(function () {
  var o;
  new Chart(document.getElementById("checkin-chart"), {
    type: "doughnut",
    data: {
      labels: ["Internas", "Visitas"],
      datasets: [
        {
          label: "Número",
          backgroundColor: ["#25B650", "#84EEA3"],
          data: [_personTotEntries, _visitsTotEntries],
        },
      ],
    },
    options: {
      responsive: !0,
      maintainAspectRatio: !1,
      title: { display: !0, fontSize: 16, text: "Ingresos del Día" },
    },
  });
  new Chart(document.getElementById("checkout-chart"), {
    type: "doughnut",
    data: {
      labels: ["Internas", "Visitas"],
      datasets: [
        {
          label: "Número",
          backgroundColor: ["#CB1B21", "#FF6469"],
          data: [_personTotExits, _visitsTotExists],
        },
      ],
    },
    options: {
      responsive: !0,
      maintainAspectRatio: !1,
      title: { display: !0, fontSize: 16, text: "Salidas del Día" },
    },
  });
  new Chart(document.getElementById("active-chart"), {
    type: "doughnut",
    data: {
      labels: ["Internas", "Visitas"],
      datasets: [
        {
          label: "Número",
          backgroundColor: ["#008BC7", "#69D1FF"],
          data: [_personTotActive, _visitsTotActive],
        },
      ],
    },
    options: {
      responsive: !0,
      maintainAspectRatio: !1,
      title: { display: !0, fontSize: 16, text: "Activos al Momento" },
    },
  });
  new Chart(document.getElementById("remainvisits-chart"), {
    type: "doughnut",
    data: {
      labels: ["Utilizadas", "Disponibles"],
      datasets: [
        {
          label: "Número",
          backgroundColor: ["#7F7F7F", "#B9B9B9"],
          data: [_visitsLast30Days, _visitsAvailable],
        },
      ],
    },
    options: {
      responsive: !0,
      maintainAspectRatio: !1,
      title: { display: !0, fontSize: 16, text: "Visitas (Últimos 30 días)" },
    },
  });
  var n = [],
    t = [],
    s = labelsArray.length;
  for (i = 1; i <= s; i++) {
    var r = Math.floor(Math.random() * 255),
      u = Math.floor(Math.random() * 255),
      f = Math.floor(Math.random() * 255),
      h = "rgba(" + r + "," + u + "," + f + ", 1)",
      c = "rgba(" + r + "," + u + "," + f + ", 0.7)";
    n.push(h);
    t.push(c);
  }
  var e = "bar",
    l = document.getElementById("mainContainer").clientWidth,
    a = 25 * labelsArray.length;
  a > l &&
    ((e = "horizontalBar"),
    (o = 25 * labelsArray.length),
    $("#barChartContainer").height(o));
  new Chart(document.getElementById("areaactive-chart"), {
    type: e,
    data: {
      labels: labelsArray,
      datasets: [
        { label: "Finalizados", backgroundColor: n, data: checkedOutArray },
        { label: "Activos", backgroundColor: t, data: activeArray },
      ],
    },
    options: {
      responsive: !0,
      scales: {
        xAxes: [{ stacked: !0 }],
        yAxes: [{ stacked: !0, ticks: { stepSize: 1 } }],
      },
      maintainAspectRatio: !1,
      legend: { display: !1 },
      title: {
        display: !0,
        fontSize: 16,
        text: "Total de Ingresos por Area/Destino",
      },
      subtitle: {
        display: !0,
        text: "(Solo se muestran areas/destinos con ingresos registrados)",
      },
    },
  });
});
