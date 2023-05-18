<script setup>
import { ref } from 'vue';

const messages = ref([]);
const new_message = ref('');

function chat() {
  // TODO: improve performance
  messages.value.unshift({
    id: messages.value.length + 1,
    body: new_message.value,
    is_bot: false,
  });
  new_message.value = '';
}
</script>

<template>
  <div>
    <div class="messages__wrapper">
      <ol>
        <li
          v-for="message in messages"
          :key="message.id"
          v-text="message.body"
          :class="is_bot ? 'bot' : 'client'"
        ></li>
      </ol>
    </div>

    <div class="chat__actions">
      <input type="text" />
      <button @click="chat">Chat</button>
    </div>
  </div>
</template>

<style scoped>
.messages__wrapper {
  height: 50vh; /** Set chat height */
  display: flex;
  justify-content: flex-end; /** Start chat at the bottom */
  flex-direction: column-reverse;
  overflow-y: auto;
}
.chat__actions {
  display: flex;
  gap: 1rem;
}
.chat__actions input {
  width: 100%;
  padding: 0.5rem 1rem;
  border-radius: 5px;
}

.chat__actions button {
  padding: 2.5rem 3.5rem;
  border-radius: 5px;
}

.bot {
  text-align: left;
}
.client {
  text-align: right;
}
</style>
