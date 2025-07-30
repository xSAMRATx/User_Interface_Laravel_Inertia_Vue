<!-- resources/js/Components/MonthlyTarget.vue -->
<template>
  <div class="bg-white rounded-xl p-6 shadow flex flex-col justify-between h-full">
    <!-- Title + Badge -->
    <div class="flex items-center justify-between mb-4">
      <h2 class="text-lg font-semibold text-gray-700">Monthly Target</h2>
      <span
        class="bg-[#ECFDF3] text-[#039855] text-xs font-medium px-3 py-1 rounded-full"
      >
        +10%
      </span>
    </div>

    <!-- Progress bar / graphic placeholder -->
    <div class="mt-4 space-y-2">
      <p class="text-3xl font-bold text-gray-800">75.55%</p>
      <div class="w-full h-3 bg-gray-200 rounded-full">
        <div
          class="h-3 bg-green-500 rounded-full"
          style="width: 75.55%;"
        ></div>
      </div>
    </div>
  </div>
</template>
