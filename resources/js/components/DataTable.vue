<template>
    <div>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                <tfoot class="table-dark">
                    <tr>
                        <th>total</th>
                        <td>212</td>
                        <td>121</td>
                        <td>43</td>
                    </tr>
                </tfoot>
            </tbody>
        </table>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    data(){
        
        return{
            categories: [],
            errors: [] 
        }
        
    },
    async created() {
    try {
      const response = await axios.get(`http://localhost:8000/api/get-categories`)
      this.categories = response.data
      console.log(this.categories)
    } catch (e) {
      this.errors.push(e)
    }
  }
};
</script>

<style></style>
