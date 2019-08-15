<script src={{url("../node_modules/vue/dist/vue.min.js")}}></script>
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>


<script type="text/x-template" id="test">
    <div>
        <div style="background-image:url('@{{ img }}')"></div>
        <h1>Make In @{{made_in}}</h1>
        <h3>Product Name: @{{name}}</h3>
        <h4>Price :@{{price}}</h4>
    </div>
</script>

<script>

    var products =[
        { made:'Taiwan',
            productName:'pen',
            productPrice:'10',
            productDesc:'buy',
            src:"https://cdna.4imprint.com/prod/extras/113165/398836/700/3.jpg",
        },
        { made:'USA',
            productName:'Apple',
            productPrice:'20010',
            productDesc:'buy',
            src:"https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone7-select-2019-family?wid=882&hei=1058&fmt=jpeg&qlt=80&op_usm=0.5,0.5&.v=1550795429263",
        },
        { made:'Taiwan',
            productName:'shoes',
            productPrice:'2100',
            productDesc:'buy',
            src:"https://stockx-360.imgix.net/Air-Jordan-1-Retro-High-Bred-Toe/Images/Air-Jordan-1-Retro-High-Bred-Toe/Lv2/img01.jpg?auto=format,compress&w=559&q=90&dpr=2&updated_at=1538080256"
        },
        { made:'Taiwan',
            productName:'watch',
            productPrice:'3000',
            productDesc:'buy',
            src:'data:image/jpeg;base64,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'
        }
    ];


    Vue.component('product-item', {
        props:['made_in','name','price','img'],
        template :'#test',
        methods: {

        }
    });


    var app = new Vue({
        el:'#app',
        data: {
            products:products,
        },
        computed:{

        },
        methods:{

        }
    })
</script>

