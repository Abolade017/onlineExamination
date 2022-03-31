<template>
  <div>
    <p>{{fruits[0]}}</p>
  </div>
</template>
<script>
export default {
  data() {
    return {
        fruits:[
            'orange',
            'banana',
            'apple'
        ]
    };
  },
  
  methods: {
   listFruits(){
       return this.fruits;
   }
  }
};
</script>