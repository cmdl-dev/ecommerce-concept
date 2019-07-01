import React, { Component } from "react";
import { connect } from "react-redux";

class ModalInfo extends Component {
    state = {
        stripe: null,
        card: null,
        isLoading: false
    };
    handleCardElement(e) {
        e.preventDefault();
        this.setState({ isLoading: true });
        setTimeout(this.removeLoading.bind(this), 3000);
        const promise = this.state.stripe.createToken(this.state.card);
        promise.then(
            result => {
                console.log(result);
            },
            reason => {
                console.log(reason);
            }
        );
    }
    removeLoading() {
        this.setState({ isLoading: false });
        localStorage.setItem("items", JSON.stringify([]));
        localStorage.setItem("total-price", "0");
        window.location.href = "/";
    }
    componentDidMount() {
        const stripe = Stripe("pk_test_FakM84nEUfKPZFFI8dAEDfyf00WqcOJr8E");
        const elements = stripe.elements();
        const cardElement = elements.create("card");
        cardElement.mount("#card-element");
        this.setState({
            stripe,
            card: cardElement
        });
    }
    render() {
        return (
            <div id="modal-form" className="">
                <div className="row">
                    <div
                        className={
                            "form col s8 " +
                            (this.state.isLoading ? "blur" : "")
                        }
                    >
                        <h3 className="col s12 center-align">
                            Payment Information
                        </h3>
                        <form className="col s12" action="" method="">
                            <div className="input-field col s6">
                                <input
                                    placeholder="First Name"
                                    id="first_name"
                                    type="text"
                                />
                                <label htmlFor="first_name">First Name</label>
                            </div>
                            <div className="input-field col s6">
                                <input
                                    placeholder="Last Name"
                                    id="last_name"
                                    type="text"
                                />
                                <label htmlFor="last_name">Last Name</label>
                            </div>
                            <div className="input-field col s12">
                                <input
                                    placeholder="Address"
                                    id="address"
                                    type="text"
                                />
                                <label htmlFor="address">Address</label>
                            </div>
                            <div className="input-field col s4">
                                <input
                                    placeholder="City"
                                    id="city"
                                    type="text"
                                />
                                <label htmlFor="city">City</label>
                            </div>
                            <div className="input-field col s4">
                                <input
                                    placeholder="State"
                                    id="state"
                                    type="text"
                                />
                                <label htmlFor="state">State</label>
                            </div>
                            <div className="input-field col s4">
                                <input placeholder="Zip" id="zip" type="text" />
                                <label htmlFor="zip">Zip</label>
                            </div>
                            <div className="input-field col s12">
                                <div id="card-element" />
                                <label htmlFor="card-element">
                                    Credit or debit card
                                </label>
                                <div id="card-errors" role="alert" />
                            </div>
                            <div className="input-field col s2">
                                <input
                                    className="wave-effect waves-light btn"
                                    type="submit"
                                    value="Submit"
                                    onClick={this.handleCardElement.bind(this)}
                                />
                            </div>
                            <div className="input-field col s2 offset-s8">
                                <a
                                    className="modal-close red darken-1 white-text btn"
                                    href="#!"
                                >
                                    Cancel
                                </a>
                            </div>
                        </form>
                    </div>
                    <div className="items col s4 row">
                        {this.props.globalState.cartItems.map(item => {
                            return (
                                <div className="row">
                                    <span className="item-name col s8">
                                        {item.name}
                                    </span>
                                    <span className="item-name col s4">
                                        {item.price}
                                    </span>
                                </div>
                            );
                        })}
                        <div className="divider" />
                        <div className="title left">Total</div>
                        <div className="total right">
                            ${this.props.globalState.totalPrice}
                        </div>
                    </div>
                </div>
                <div
                    className={
                        "preloader-wrapper big " +
                        (this.state.isLoading ? "active" : "")
                    }
                >
                    <div className="spinner-layer spinner-blue-only">
                        <div className="circle-clipper left active">
                            <div className="circle" />
                        </div>
                        <div className="gap-patch">
                            <div className="circle" />
                        </div>
                        <div className="circle-clipper right">
                            <div className="circle" />
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

const mapStateToProps = state => {
    return state;
};

export default connect(
    mapStateToProps,
    {}
)(ModalInfo);
