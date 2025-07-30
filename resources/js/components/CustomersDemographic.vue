<script setup>
const demographics = [
  {
    country: 'USA',
    flag: 'https://flagcdn.com/w40/us.png',
    customers: 2379,
    percent: 79
  },
  {
    country: 'France',
    flag: 'https://flagcdn.com/w40/fr.png',
    customers: 589,
    percent: 23
  }
]

</script>

<template>
  <div class="bg-white p-6 rounded-xl shadow-sm border">
    <div class="flex justify-between items-center mb-4">
      <div>
        <h2 class="text-base font-semibold text-gray-900">Customers Demographic</h2>
        <p class="text-sm text-gray-500">Number of customer based on country</p>
      </div>
      <button class="text-gray-400 hover:text-gray-600 text-xl">⋮</button>
    </div>

    <div class="rounded-lg overflow-hidden mb-4">
      <img src="https://upload.wikimedia.org/wikipedia/commons/8/80/World_map_-_low_resolution.svg" alt="World Map"
        class="w-full h-40 object-cover opacity-90" />
    </div>

    <div v-for="item in demographics" :key="item.country" class="mb-3">
      <div class="flex items-center justify-between">
        <div class="flex items-center gap-2">
          <img :src="item.flag" alt="Flag" class="w-6 h-6 object-cover rounded-full" />
          <div>
            <p class="font-medium text-gray-800">{{ item.country }}</p>
            <p class="text-sm text-gray-500">{{ item.customers.toLocaleString() }} Customers</p>
          </div>
        </div>
        <p class="text-sm text-gray-600 font-semibold">{{ item.percent }}%</p>
      </div>
      <div class="w-full h-2 mt-1 bg-gray-200 rounded-full">
        <div :style="{ width: item.percent + '%' }" class="h-full bg-indigo-600 rounded-full"></div>
      </div>
    </div>
  </div>
</template>
