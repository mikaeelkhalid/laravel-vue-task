<template>
    <div v-if="showTable">
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Branche</th>
                    <th scope="col" v-for="(item, i) in stats" :key="i">
                        {{ item.stats }}
                    </th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr v-for="(item, i) in categories_uni" :key="i" scope="row">
                    <th scope="row">{{ item.category }}</th>
                </tr> -->
                <tr>
                    <td>{{ value[0] }}</td>
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
    props: ["showTable", "values", "count_stats", "value"],
    data() {
        return {
            categories: [],
            categories_uni: [],

            stats: [],
            // count_stats: [],
            errors: [],
            tdLeft: `<td>`,
            tdRight: `</td>`,
        };
    },
    setup(props) {
        console.log(props.showTable);
    },

    async created(props) {
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
    },
};
</script>

<style></style>
