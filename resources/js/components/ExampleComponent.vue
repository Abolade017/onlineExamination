<template>
  <div class="flex justify-end items center pr-6">
    <div class="flex justify-between px-2 w-48 h-20 bg-blue-500 text-white rounded-lg text-2xl">
      <div class="items-center">{{displayHours}}</div>
      <div class="items-center">:</div>
      <div class="items-center">{{displayMinutes}}</div>
      <div class="items-center">:</div>
      <div class="items-center">{{displaySeconds}}</div>
    </div>
  </div>
</template>
<script>
export default {
  name: "ExampleComponent",
  data() {
    return {
      displayDays: 0,
      displayMinutes: 0,
      displayHours: 0,
      displaySeconds: 0,
    };
  },
  mounted() {
    this.showRemainingTime();
  },

  methods: {
    showRemainingTime() {
      const timer = setInterval(() => {
        const start = new Date().getTime();
        const end = new Date(2021, 11, 13, 15, 30, 30).getTime();
        const distance = end - start;
        if (distance < 0) {
          clearInterval(timer);
          return;
        }
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor(
          (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
        );
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);
        this.displayHours = hours < 10 ? hours : hours;
        this.displayMinutes = minutes < 30 ? minutes : minutes;
        this.displaySeconds = seconds < 30 ? seconds : seconds;
      }, 1000);
    }
  }
};
</script>
