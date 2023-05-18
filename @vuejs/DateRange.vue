<script setup>
import { ref, watch, computed } from 'vue';
import moment from 'moment';
import { vOnClickOutside } from '@vueuse/components';

import { Calendar, DatePicker } from 'v-calendar';
import 'v-calendar/style.css';

const props = defineProps(['value']);

const emit = defineEmits(['update:modelValue', 'clear']);

const dialog = ref(false);

function hide() {
  dialog.value = false;
}

const range = ref({
  start: props.value?.start || null,
  end: props.value?.end || null,
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

function clear() {
  dialog.value = false;
  range.value = {
    start: null,
    end: null,
  };
  emit('clear');
}
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
    <span
      @click="clear"
      class="absolute right-0 top-0 text-red-400 px-[.5rem] cursor-pointer rounded-full hover:bg-red-400/25"
    >
      &times;
    </span>
  </div>
</template>
