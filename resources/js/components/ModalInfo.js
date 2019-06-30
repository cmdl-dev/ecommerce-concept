import React, { Component } from "react";
import { connect } from "react-redux";

// const promise = stripe.createToken(card);
// promise
//     .then(result => result.token)
class ModalInfo extends Component {
    state = {
        stripe: null,
        card: null
    };
    handleCardElement() {
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
            <div id="modal-form" className="container">
                <div className="row">
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
                            <input placeholder="City" id="city" type="text" />
                            <label htmlFor="city">City</label>
                        </div>
                        <div className="input-field col s4">
                            <input placeholder="State" id="state" type="text" />
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
