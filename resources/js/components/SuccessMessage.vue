<template>
<div>
    <p>{</p>
</div>
</template>
<script>
export default {
    data(){
        return{
            message:'sucess',
        }
    },
aftercreated(){
    return success();
},
    methods:{
        success(){
            alert(this.message);

        }
    }
}
</script>