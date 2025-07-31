<template>
  <div class="flex border p-4 rounded shadow-md">
    <div class="flex flex-col flex-1 space-y-2">
      <div class="p-2 bg-indigo-100 text-indigo-600 rounded w-10 h-10 flex items-center justify-center mb-4">
        <component :is="icon" class="w-5 h-5 text-black" />
      </div>

      <div class="text-md text-gray-500">{{ title }}</div>
      <div class="text-3xl font-semibold text-gray-900">{{ value }}</div>

    </div>

    <div class="flex flex-col justify-end ml-4">
      <span :class="[
        'text-xs font-medium px-3 py-1 rounded-full',
        trend >= 0
          ? 'bg-[#ECFDF3] text-[#039855]'
          : 'bg-[#FEF3F2] text-[#D92D20]'
      ]">{{ trend > 0 ? `▲ ${trend}%` : `▼ ${Math.abs(trend)}%` }}</span>
    </div>
  </div>
</template>

<script setup>
defineProps({
  title: String,
  value: [String, Number],
  trend: Number,
  icon: Object,
})
</script>