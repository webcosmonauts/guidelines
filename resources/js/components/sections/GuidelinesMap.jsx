import React, { Component } from 'react';
import GoogleMapReact from 'google-map-react';

const AnyReactComponent = ({ text }) => <div>{text}</div>;

class GuidelinesMap extends Component {
    static defaultProps = {
        center: {
            lat: 51.0883761,
            lng: 17.0047779
        },
        zoom: 11
    };

    render() {
        return (
            <div style={{ height: '100vh', width: '100%' }}>
                <GoogleMapReact
                    bootstrapURLKeys={{ key: "AIzaSyCKyaU1lZi4gS7xf4QvsloMCKr7qXuQWm4" }}
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
