<script setup>
import { ref } from 'vue';
import ApexChart from "vue3-apexcharts";
const chartOptions = ref({
  chart: {
    type: 'bar',
    toolbar: { show: false },
  },
  plotOptions: {
    bar: {
      borderRadius: 6,
      columnWidth: '45%',
      grouped: true, // show bars side by side
    }
  },
  colors: ['#3C5BFF', '#F97316', '#10B981'], // distinct color for each dataset
  dataLabels: { enabled: false },
  xaxis: {
    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    labels: {
      style: {
        fontSize: '14px',
        colors: '#737373',
      },
    },
  },
  yaxis: {
    labels: {
      style: {
        colors: '#A3A3A3',
      }
    }
  },
  grid: {
    show: true,
    borderColor: '#F3F4F6',
  },
});

const series = ref([
  {
    name: 'Sales',
    data: [450, 700, 400, 0, 300, 650, 480, 650, 560, 600, 350, 520],
  },
  {
    name: 'Revenue',
    data: [500, 620, 450, 100, 320, 700, 490, 620, 580, 610, 360, 530],
  },
  {
    name: 'Profit',
    data: [200, 300, 180, 50, 100, 250, 200, 300, 250, 310, 200, 230],
  }
]);
</script>

<template>
  <p class="text-base font-semibold text-gray-900 mb-2">Monthly Sales</p>
  <ApexChart type="bar" height="250" :options="chartOptions" :series="series" />
</template>
