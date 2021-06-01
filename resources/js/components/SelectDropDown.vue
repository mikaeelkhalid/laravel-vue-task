<template>
    <div>
        <Multiselect
            v-model="value"
            mode="tags"
            placeholder="Select value"
            :searchable="false"
            :createTag="true"
            :options="options"
            @select="toggleSelected"
        />
    </div>

    <div class="container mt-5">
        <DataTable
            :showTable="showTable"
            :values="values"
            :count_stats="count_stats"
            :value="value"
        />
    </div>
</template>

<script>
import Multiselect from "@vueform/multiselect";
import DataTable from "./DataTable.vue";
import axios from "axios";

export default {
    components: {
        Multiselect,
        DataTable,
    },
    data() {
        return {
            value: [],
            values: [],
            showTable: false,
            options: [],
            count_stats: [],
            categories: [],
            errors: [],
        };
    },
    methods: {
        async toggleSelected(value) {
            this.values.push(value);
            this.showTable = true;

            try {
                let response = await axios.post(
                    `http://localhost:8000/api/get-sales`,

                    { category: this.values }
                );
                this.count_stats = await response.data.data;
                console.log(this.count_stats);
            } catch (e) {
                this.errors.push(e);
            }
            this.values = [];
        },
    },

    async created() {
        try {
            const response = await axios.get(
                `http://localhost:8000/api/get-categories`
            );
            this.categories = await response.data.data;
            this.options = await this.categories.map((item) => {
                return {
                    value: item.category,
                    label: item.category,
                };
            });
        } catch (e) {
            this.errors.push(e);
        }
    },
};
</script>

<style src="@vueform/multiselect/themes/default.css"></style>
