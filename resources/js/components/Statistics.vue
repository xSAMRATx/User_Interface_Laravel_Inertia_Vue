<script setup>
import { ref } from 'vue'
import ApexChart from 'vue3-apexcharts'

const activeTab = ref('Overview')

const tabs = ['Overview', 'Sales', 'Revenue']

const chartOptions = ref({
  chart: {
    type: 'area',
    toolbar: { show: false },
    zoom: { enabled: false },
  },
  colors: ['#3C5BFF', '#93C5FD', '#10B981'],
  dataLabels: { enabled: false },
  stroke: {
    curve: 'smooth',
    width: 2,
  },
  fill: {
    type: 'gradient',
    gradient: {
      shadeIntensity: 1,
      opacityFrom: 0.4,
      opacityTo: 0.1,
      stops: [0, 90, 100]
    }
  },
  xaxis: {
    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    labels: {
      style: { colors: '#6B7280' } // Tailwind's gray-500
    }
  },
  yaxis: {
    min: 0,
    max: 1000,
    labels: {
      style: { colors: '#6B7280' }
    }
  },
  grid: {
    borderColor: '#E5E7EB' // Tailwind gray-200
  },
  legend: {
    show: true,
    position: 'top',
    labels: {
      colors: '#6B7280'
    }
  }
})

const series = ref([
  {
    name: 'Target',
    data: [700, 720, 740, 750, 760, 780, 800, 820, 830, 840, 860, 880],
  },
  {
    name: 'Achieved',
    data: [450, 470, 490, 500, 530, 560, 580, 590, 610, 640, 660, 680],
  },
  {
    name: 'Forecast',
    data: [600, 650, 680, 710, 720, 750, 770, 800, 820, 850, 870, 890],
  }
])
</script>

<template>
  <div class="bg-white p-6 rounded-xl shadow-sm border">
    <div class="flex justify-between items-center mb-4">
      <div>
        <h2 class="text-base font-semibold text-gray-900">Statistics</h2>
        <p class="text-sm text-gray-500">Target you’ve set for each month</p>
      </div>
      <div class="flex items-center space-x-4">
        <div class="bg-gray-100 rounded-full p-1">
          <button v-for="tab in tabs" :key="tab" @click="activeTab = tab" :class="[
            'text-sm font-medium px-3 py-1 rounded-full',
            activeTab === tab ? 'bg-white shadow text-gray-900' : 'text-gray-500'
          ]">
            {{ tab }}
          </button>
        </div>
        <button class="text-sm text-gray-600 border border-gray-200 rounded-lg px-3 py-1.5 hover:bg-gray-50">
          05 Feb – 06 March
        </button>
      </div>
    </div>

    <ApexChart height="300" type="area" :options="chartOptions" :series="series" />
  </div>
</template>
