<template>
    <DataTable />
    <SelectDropDown />
</template>

<script>
import DataTable from "./DataTable.vue";
import SelectDropDown from "./SelectDropDown.vue";

export default {
    name: "App",
    components: {
        DataTable,
        SelectDropDown,
    },
};
</script>

<style>
#app {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    text-align: center;
    color: #2c3e50;
    margin-top: 60px;
}
</style>
