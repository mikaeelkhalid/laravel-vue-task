<template>
    <div class="container">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Sales Report</h1>
                <p class="lead">Local Hero Laravel + Vue Assesment</p>
            </div>
        </div>
        <div class="mt-5 mb-5">
            <NavBar />
        </div>
        <div class="container mt-5">
            <SelectDropDown />
        </div>
        <div class="container mt-5">
            <DataTable />
        </div>
    </div>
</template>

<script>
import DataTable from "./DataTable.vue";
import SelectDropDown from "./SelectDropDown.vue";
import NavBar from "./NavBar.vue";

export default {
    name: "App",
    components: {
        DataTable,
        SelectDropDown,
        NavBar,
    },
};
</script>

<style>
#app {
    font-family: Avenir, Helvetica, Arial, sans-serif;
    text-align: center;
    margin-top: 60px;
}
</style>
