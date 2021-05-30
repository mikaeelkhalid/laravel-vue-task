<template>
    <div>
        <Multiselect
            v-model="value"
            mode="tags"
            placeholder="Select value"
            :searchable="false"
            :createTag="true"
            :options="options"
        />
    </div>
</template>

<script>
import Multiselect from "@vueform/multiselect";
import axios from "axios";

export default {
    components: {
        Multiselect,
    },
    data() {
        return {
            value: null,
            options: [],
            categories: [],
            errors: [],
        };
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
            // console.log("data:", this.option);
        } catch (e) {
            this.errors.push(e);
        }
    },
};
</script>

<style src="@vueform/multiselect/themes/default.css"></style>
