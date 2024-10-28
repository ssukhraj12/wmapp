<template>
    <div class="brands">
        <v-row>
            <v-col cols="6"><h3>All Brands</h3></v-col>
            <v-col cols="6">
                <v-form ref="form" v-model="valid" lazy-validation class="d-flex justify-space-around">
                <div class="w-75">
                    <v-text-field v-model="form1.brand_name" density="compact" variant="outlined" counter
                                  :rules="brandRules" label="Brand Name" class="w250"></v-text-field>
                </div>
                <div>
                    <v-btn color="success" size="small" @click.submit.prevent="addnewBrand"
                           :disabled="!valid"><v-icon>mdi-plus</v-icon>Add Brand</v-btn>
                </div>
                </v-form>
            </v-col>
        </v-row>
        <v-data-table :items="brands" :headers="headers" density="compact">
            <template v-slot:item.actions="actions">
                <v-btn color="primary" size="x-small">Edit</v-btn>
            </template>
        </v-data-table>
    </div>
</template>

<script>
export default {
    name: "AddBrand",
    data() {
        return {
            valid:false,
            brands:[],
            brandRules: [
                v => !!v || 'Brand Name is required.',
                v => v.length >= 3 || 'Brand minimum 3 characters.',
                v => v.length <= 15 || 'Brand minimum 15 characters.',
            ],
            headers:[
                {title:'Brand ID',key:'brand_id'},
                {title:'Brand Name',key:'brand_name'},
                {title:'Actions',key:'actions'}
                ],
            form1:{
                brand_name:'',
            }
        }
    },
    created() {
        this.allBrands();
    },
    methods:{
        allBrands(){
            axios.get('../api/brands')
            .then((resp)=>{
                this.brands = resp.data.brands;
            })
        },
        addnewBrand(){
            const data = {
                brand_name:this.form1.brand_name,
            }
            axios.post('../api/brand/add',data)
            .then((resp)=>{
                console.log(resp.data);
                this.allBrands();
            })

        }
    }
}
</script>

<style scoped>
.w250{width: 250px;}
</style>
