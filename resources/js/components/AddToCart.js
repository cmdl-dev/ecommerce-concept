import React, { Component } from 'react';
import ReactDOM from 'react-dom'
export default class AddToCart extends Component {
    state = {
        selectedSize: '',
        sizes: [
            4,
            4.5,
            5,
            5.5,
            6,
            6.5,
            7,
            7.5,
            8,
            8.5,
            9,
            9.5,
            10,
            10.5,
            11,
            11.5,
        ]
    }
    allSizes = () => {
        return this.state.sizes.map((size,key) => {
            return (
                <div key={key} 
                    className={`option ${this.state.selectedSize === size ? 'selected' : ''}`} 
                    onClick={this.clickedSize.bind(null,size)}>{size}</div>
            )
        })
    }
    clickedSize = (selectedSize) =>{
        this.setState({
            selectedSize 
        })
    }
    clickedAddToCartBtn = () => {
        if(this.state.selectedSize !== ''){
            console.log(`We added size ${this.state.selectedSize} to the cart`)
        }else{
            console.log('Please selected a size')
        }

    }
    render() {

        return (
            <div className="add-to-cart">

            <div className="detail-section">

                <div className="detail">
                    <input type="checkbox" className="toggle" id="size-dropdown" />
                    <label className='title size-title' htmlFor="size-dropdown">Size</label>
                    <div className="content">
                        <div className="size">
                            {this.allSizes()}
                        </div>
                    </div>
                </div>
            </div>
            <div className="btn-area">
                <div className="btn" onClick={this.clickedAddToCartBtn}>
                    Add To Cart
                </div>
            </div>

            </div>
        );
    }
}
ReactDOM.render(<AddToCart />, document.getElementById('productAddToCart'))