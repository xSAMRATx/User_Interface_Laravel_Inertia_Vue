<script setup>
import { MoveDown, MoveUp } from 'lucide-vue-next';
</script>

<template>
  <div class="h-full w-full bg-white rounded-xl shadow overflow-hidden flex flex-col">

    <div class="flex-1 p-4 flex flex-col justify-between">
      <div class="flex flex-col space-x-4 mb-4">
        <p class="text-xl font-bold text-black mb-2">Monthly Target</p>
        <p class="text-gray-400 text-md font-medium">Target you've set for each month</p>
      </div>

      <div class="flex flex-col items-center justify-center flex-grow">
        <div class="relative w-48 h-48">
          <div class="w-full h-full border-[16px] border-blue-500 border-t-gray-200 rounded-full animate-spin-slow">
          </div>

          <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <p class="text-xl font-bold text-black">75.55%</p>
            <div
              class="text-xs flex items-center justify-center bg-green-100 text-green-600 font-medium rounded-full px-1 py-0.5 mt-1">
              +10%</div>
          </div>
        </div>

        <p class="mt-4 text-xl text-gray-400 text-center w-3/4">
          You’ve earn $3287 today, its higher than last month. of your goal for this month. Keep up your good work!
        </p>
      </div>
    </div>

    <div class="bg-gray-100 p-4 flex justify-between">
      <div class="w-1/3 text-center">
        <p class="text-gray-500 text-xl font-medium mb-2">Target</p>
        <div class="flex items-center justify-center">
          <p class="text-2xl font-bold text-black">$20K</p>
          <MoveDown class="text-red-500 ml-2" />
        </div>
      </div>

      <div class="w-1/3 text-center">
        <p class="text-gray-500 text-xl font-medium mb-2">Revenue</p>
        <div class="flex items-center justify-center">
          <p class="text-2xl font-bold text-black">$16K</p>
          <MoveUp class="text-green-500 ml-2" />
        </div>
      </div>

      <div class="w-1/3 text-center">
        <p class="text-gray-500 text-xl font-medium mb-2">Today</p>
        <div class="flex items-center justify-center">
          <p class="text-2xl font-bold text-black">$1.5K</p>
          <MoveUp class="text-green-500 ml-2" />
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
@keyframes spin-slow {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

.animate-spin-slow {
  animation: spin-slow 4s linear infinite;
}
</style>
