<template>
    <div class="productadd mt-4  bg-white card p-2">
        <v-form v-model="valid">
            <v-row>
                <v-col cols="12" md="6">
                    <v-text-field v-model="form1.ptitle" label="Title" variant="underlined"></v-text-field>
                </v-col>
                <v-col cols="12" md="6">
                    <v-autocomplete v-model="form1.pbrand" label="Brand" :items="brands" item-title="brand_name" item-value="brand_id"
                                    clearable variant="underlined"></v-autocomplete>
                </v-col>
                <v-col cols="12" md="6">
                    <v-textarea v-model="form1.pdesc" label="Description" variant="underlined"></v-textarea>
                </v-col>
                <v-col cols="12" md="6">
                    <v-text-field v-model="form1.psku" label="SKU" variant="underlined"></v-text-field>
                    <v-radio-group inline label="Product Type" v-model="form1.ptype">
                        <v-radio label="Simple" value="0"></v-radio>
                        <v-radio label="Variant" value="1"></v-radio>
                        <v-radio label="Kit/Bundle" value="2"></v-radio>
                    </v-radio-group>
                </v-col>
                <v-col cols="12" v-if="form1.ptype === '1'">
<!--                    <v-row v-for="(opname, index) in opnames" :key="index">-->
                    <v-row>
                        <v-col cols="3">
                            <v-autocomplete v-model="form1.popnames" label="Option Name" :items="opnames" item-title="name" variant="underlined" density="compact"></v-autocomplete>
                        </v-col>
                        <v-col cols="9">
                            <v-text-field v-model="selectValues" label="Option Values" density="compact" variant="underlined" @input="handleInput"></v-text-field>
                        </v-col>
                    </v-row>
                    <v-btn @click="addRow" color="red">Add More</v-btn>
                </v-col>
                <v-col cols="12" v-if="form1.ptype === '2'">Kit Product</v-col>
                <v-col cols="12">
                    <v-btn color="success" @click="addPro">Add Product</v-btn>
                </v-col>
            </v-row>

        </v-form>
    </div>
</template>

<script>
export default {
    name: "ProductAdd",
    data() {
        return {
            brands: [],
            option: '',
            selectOption:'',
            selectValues:'',
            opnames:[
                {id:1,name:'Default'},
                {id:2,name:'Colour'},
                {id:3,name:'Size'},
                {id:4,name:'Style'},
                {id:5,name:'Pack'},
            ],
            form1:{
                ptitle:'',
                pbrand:'',
                pdesc:'',
                psku:'',
                ptype:'',
                popnames:[],
                popvalues:[],
                pops:[],
            },
            tempros:[],


        }
    },
    created() {
        this.allBrands();
    },
    methods: {
        allBrands(){
            axios.get('/api/brands')
                .then((resp)=>{
                    this.brands = resp.data.brands;
                })
        },
        addRow() {
            this.form1.popnames.push('');
            this.form1.popvalues.push('');
        },
        handleInput(){
            // this.form1.popvalues[index] = this.form1.popvalues[index].join(', ');
            // this.form1.pops = this.selectValues.split(',').map(value => value.trim());
            // this.form1.pops = this.form1.popvalues.map(values => values.join(', ').trim());
            this.form1.popvalues = this.selectValues.split(',').map(value => value.trim());
            // this.form1.popvalues[index] = this.form1.popvalues.map(values => values.join(', ').trim());
            // // this.form1.pops = this.form1.popvalues[index].join(', ').splice(',').map(value=> value.trim());
        },
        addPro(){
            const pdata = {
                'ptitle':this.form1.ptitle,
                'pbrand':this.form1.pbrand,
                'pdesc':this.form1.pdesc,
                'ptype':this.form1.ptype,
                'popnames':this.form1.popnames,
                'popvalues':this.selectValues,
                'pops':this.form1.pops,
                'soption':this.option,
                'svalues':this.option
            }
            const names = pdata.popnames;
            const values = pdata.popvalues;
            const alloptions = [];
            const alls = [];
            // console.log(values);return false;

            // names.forEach((op1, index) => {
            //     // Check if values[index] is an array before using forEach
            //     if (Array.isArray(values[index])) {
            //         values[index].forEach(op2 => {
            //             alloptions.push(`${op1} / ${op2}`);
            //             alls.push(`${op1},${op2}`);
            //         });
            //     } else {
            //         // If values[index] is not an array, push it as a single value
            //         alloptions.push(`${op1} / ${values[index]}`);
            //         alls.push(`${op1},${values[index]}`);
            //     }
            // });

            if(names){
                const opt1 = names;
                const vales = [vam=>values];
                vales.forEach(vals=>{
                    alloptions.push(`${opt1} : ${vals}`)
                    alls.push(`${opt1},${vals}`)
                })
            }else{
                names.forEach(op1 => {
                    values[index].forEach(op2 => {
                        alloptions.push(`${op1} / ${op2}`);
                        alls.push(`${op1},${op2}`);
                        // alls.push(`${pdata.popnames}:${op1}, ${pdata.popvalues}:${op2}`);

                    })
                });
            }



//             names.forEach((op1, index) => {
//                 const op2 = values[index] || ''; // Access corresponding value or use empty string if not available
//                 alloptions.push(`${op1} / ${op2}`);
//                 alls.push(`${op1},${op2}`);
//             });
//
// If you want to handle the case when popvalues has more elements than popnames
//             for (let i = names.length; i < values.length; i++) {
//                 alls.push(`,${values[i]}`); // Push values without corresponding names
//             }
            this.tempros = {
                'ptitle':pdata.ptitle,
                'pbrand':pdata.pbrand,
                'pdesc':pdata.pdesc,
                'ptype':pdata.ptype,
                'popnames':pdata.popnames,
                'popvalues':pdata.popvalues,
                'pops':pdata.pops,
                'options':alloptions,
                'alldps':alls,
            }
            console.log(this.tempros);
        }
    },
}
</script>

<style scoped>

</style>
