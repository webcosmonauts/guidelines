import React, { Component } from 'react';
import GoogleMapReact from 'google-map-react';

const AnyReactComponent = ({ text }) => <div>{text}</div>;

class GuidelinesMap extends Component {
    static defaultProps = {
        center: {
            lat: 51.109856,
            lng: 17.033198,
        },
        zoom: 15
    };

    render() {
        return (
            <div style={{ height: '100vh', width: '100%' }}>
                <GoogleMapReact
                    bootstrapURLKeys={{ key: "AIzaSyBaQ9AyS81o7SbF610sbDe58GNFkUDoAQE" }}
                    defaultCenter={this.props.center}
                    defaultZoom={this.props.zoom}
                >
                    <AnyReactComponent
                        lat={51.0883761}
                        lng={17.0047779}
                        text="My Marker"
                    />
                </GoogleMapReact>
            </div>
        );
    }
}

export default GuidelinesMap;
