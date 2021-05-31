<template>
    <div>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Branche</th>
                    <th scope="col" v-for="(item, i) in stats" :key="i">
                        {{ item.stats }}
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(item, i) in categories_uni" :key="i" scope="row">
                    <th scope="row">{{ item.category }}</th>
                    <td v-for="(item, i) in count_stats" :key="i">
                        {{ item }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            categories: [],
            categories_uni: [],
            stats: [],
            count_stats: [],
            errors: [],
        };
    },
    async created() {
        try {
            const response = await axios.get(
                `http://localhost:8000/api/get-categories`
            );

            this.categories_uni = await response.data.data;
        } catch (e) {
            this.errors.push(e);
        }

        try {
            let response = await axios.get(
                `http://localhost:8000/api/get-stats`
            );
            this.stats = await response.data.data;

            console.log(this.stats);
        } catch (e) {
            this.errors.push(e);
        }

        try {
            let response = await axios.post(
                `http://localhost:8000/api/get-sales`,
                { stats: this.stats }
            );
            this.count_stats = await response.data.data;
            console.log(this.count_stats);
        } catch (e) {
            this.errors.push(e);
        }
    },
};
</script>

<style></style>
