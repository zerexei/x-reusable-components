<script setup>
import { ref, watch, computed } from 'vue';
import moment from 'moment';
import { vOnClickOutside } from '@vueuse/components';

import { Calendar, DatePicker } from 'v-calendar';
import 'v-calendar/style.css';

const emit = defineEmits(['update:modelValue']);

const dialog = ref(false);
function hide() {
  dialog.value = false;
}

const range = ref({
  start: null,
  end: null,
});

watch(
  () => range.value.start,
  () => {
    emit('update:modelValue', range.value);
  }
);

const range_text = computed(() => {
  if (!range.value.start) return '';
  return (
    moment(range.value.start).format('YYYY-MM-DD') +
    ' - ' +
    moment(range.value.end).format('YYYY-MM-DD')
  );
});
</script>
<template>
  <div class="flex-1 relative" v-on-click-outside="hide">
    <input
      :value="range_text"
      @focus="dialog = true"
      class="w-full p-2 border rounded-md shadow"
      readonly
    />
    <span class="absolute left-0 top-[3rem] z-20" v-if="dialog">
      <DatePicker v-model.range="range" />
    </span>
  </div>
</template>
