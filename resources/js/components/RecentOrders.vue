<script setup>
const orders = [
  {
    product: 'Macbook pro 13”',
    variants: 2,
    category: 'Laptop',
    price: 2399,
    status: 'Delivered',
    image: '💻'
  },
  {
    product: 'Apple Watch Ultra',
    variants: 1,
    category: 'Watch',
    price: 879,
    status: 'Pending',
    image: '⌚'
  },
  {
    product: 'iPhone 15 Pro Max',
    variants: 2,
    category: 'Smart Phone',
    price: 1869,
    status: 'Delivered',
    image: '📱'
  },
  {
    product: 'iPad Pro 3rd Gen',
    variants: 2,
    category: 'Electronics',
    price: 1699,
    status: 'Canceled',
    image: '📟'
  },
  {
    product: 'Airpods Pro 2nd Gen',
    variants: 1,
    category: 'Accessories',
    price: 240,
    status: 'Delivered',
    image: '🎧'
  }
]

const statusClasses = {
  Delivered: 'text-green-600 bg-green-100',
  Pending: 'text-yellow-600 bg-yellow-100',
  Canceled: 'text-red-600 bg-red-100',
}
</script>

<template>
  <div class="bg-white p-6 rounded-xl shadow-sm border">
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-base font-semibold text-gray-900">Recent Orders</h2>
      <div class="flex items-center gap-3">
        <button class="flex items-center text-sm border px-3 py-1.5 rounded-lg text-gray-700 hover:bg-gray-50">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-1" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10h18M3 16h18M3 22h18" />
          </svg>
          Filter
        </button>
        <button class="text-sm text-indigo-600 hover:underline">See all</button>
      </div>
    </div>

    <div class="divide-y divide-gray-200">
      <div v-for="(order, index) in orders" :key="index" class="py-4 flex items-center justify-between">
        <div class="flex items-center gap-3">
          <div class="text-2xl">{{ order.image }}</div>
          <div>
            <p class="font-medium text-gray-800">{{ order.product }}</p>
            <p class="text-sm text-gray-500">{{ order.variants }} Variants</p>
          </div>
        </div>
        <p class="w-28 text-sm text-gray-600">{{ order.category }}</p>
        <p class="w-24 text-sm text-gray-800 font-semibold">${{ order.price.toFixed(2) }}</p>
        <span class="text-xs px-2 py-1 rounded-full font-medium" :class="statusClasses[order.status]">
          {{ order.status }}
        </span>
      </div>
    </div>
  </div>
</template>
