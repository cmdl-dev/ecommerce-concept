import React, { Component } from 'react';
import { connect } from 'react-redux';
import { closingCart } from '../actions/allActions'

class CartPopup extends Component {

    //
    componentDidUpdate(){
        if(this.props.globalState.isCartOpen){
            console.log(this.props.globalState.isCartOpen)
            const cartPopupElement = document.getElementById('cart-popup')
            document.addEventListener('click', event => {
                var clickedInside = cartPopupElement.contains(event.target)
                if(clickedInside){
                    console.log('You clicked in side')
                }else{
                    this.props.closingCart();
                    console.log('You cliked outside')
                }
            })
        }
    }
    render() {
        return (
        <section id="cart-popup" className={this.props.globalState.isCartOpen ? 'active' : ''}>
            <div>
                <div className="cart-title">
                    <div className="title">My Cart</div>
                </div>
            </div>
            <div className='cart-items'>
                <div className="item-container">
                    <div className="item">
                        <img src={this.props.imgRoute} alt="Yeezy Boost"></img>
                        <div className="delete-btn">
                            <div className="circle">X</div>
                        </div>
                    </div>
                    <div className="item">
                        <img src={this.props.imgRoute} alt="Yeezy Boost"></img>
                        <div className="delete-btn">
                            <div className="circle">X</div>
                        </div>
                    </div>
                    <div className="item">
                        <img src={this.props.imgRoute} alt="Yeezy Boost"></img>
                        <div className="delete-btn">
                            <div className="circle">X</div>
                        </div>
                    </div>
                    <div className="item">
                        <img src={this.props.imgRoute} alt="Yeezy Boost"></img>
                        <div className="delete-btn">
                            <div className="circle">X</div>
                        </div>
                    </div>
                </div>
            </div>
            <div className='product-total'>
                <div className="title">Total</div>
                <div className="number">x4</div>
            </div>
            <div className='price-total'>
                <div className="title">Total</div>
                <div className="number">$3,000</div>
            </div>
            <div className='checkout'>
                <div className="title">
                    Checkout
                </div>
                <span className="ti-shopping-cart"></span>
            </div>
        </section>
        );
    }
}

const mapStateToProps = state => {
    return state
}

export default connect(mapStateToProps,{
    closingCart
})(CartPopup)