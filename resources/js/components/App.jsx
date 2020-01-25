import React from 'react';
import ReactDOM from 'react-dom';
import Header from "./sections/Header";
import GuidelinesMap from "./sections/GuidelinesMap";
import Footer from "./sections/Footer";

class Main extends React.Component{
    render() {
        return (
            <div className="container-fluid">
                <Header />
                <GuidelinesMap />
                <Footer />
            </div>
        );
    }
}

if (document.getElementById('root')) {
    ReactDOM.render(<Main/>, document.getElementById('root'));
}
