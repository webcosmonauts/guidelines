import React, {Component} from 'react';
import GoogleMapReact from 'google-map-react';

const MapPin = ({ text }) => <div className="map_pin">{text}</div>;
class GuidelinesMap extends Component {

    constructor() {
        super();
        this.state = {
            pois : [],
            route : []
        };
        this.buildRoute = this.buildRoute.bind(this);
        this.addMarkers = this.addMarkers.bind(this);
    }

    static defaultProps = {
        center: {
            lat: 51.109856,
            lng: 17.033198,
        },
        zoom: 13
    };

    componentDidMount() {
        fetch('http://guidelines.test/routes')
            .then(response => response.json())
            .then(data => {
                this.setState({
                    pois: data
                });
            });
    }

    buildRoute(route) {
        let routesArray = [];
        routesArray = route.pois.map((routes,i) => routes);
        this.setState({route : routesArray})
    }

    addMarkers(markers) {

    }

    handleChange = (event) => {
        this.buildRoute(this.state.pois[event.target.value]);
    };

    render() {
        const routeSelection = this.state.pois.map((item, i) => <option key={item.id}
                                                                        value={item.id - 1}>{item.title}</option>);
        const routes = this.state.route.map((route,i) => <MapPin key={route.id} lat={route.latitude} lng={route.longitude} />);
        return (
            <div style={{height: '100vh', width: '100%'}}>
                <div className="select">
                    <select name="select_route" id="select_route" onChange={this.handleChange}>
                        <option value="" disabled="">Select route</option>
                        {routeSelection}
                    </select>
                </div>

                <GoogleMapReact
                    bootstrapURLKeys={{key: "AIzaSyBaQ9AyS81o7SbF610sbDe58GNFkUDoAQE"}}
                    defaultZoom={this.props.zoom}
                    defaultCenter={this.props.center}
                >
                    {routes}


                </GoogleMapReact>
            </div>
        );
    }
}

export default GuidelinesMap;
