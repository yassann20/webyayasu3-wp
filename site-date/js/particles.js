   particlesJS('particles-js', {
            particles: {
                number: {
                    value: 150, // パーティクルの数
                    density: {
                        enable: true,
                        value_area: 800
                    }
                },
                color: {
                    value: '#4C444D' // パーティクルの色
                },
                shape: {
                    type: 'circle', // パーティクルの形状
                    stroke: {
                        width: 0,
                        color: '#000000'
                    },
                    polygon: {
                        nb_sides: 5
                    }
                },
                opacity: {
                    value: 0.5, // パーティクルの透明度
                    random: false,
                    anim: {
                        enable: false,
                        speed: 1,
                        opacity_min: 0.1,
                        sync: false
                    }
                },
                size: {
                    value: 2, // パーティクルのサイズ
                    random: true,
                    anim: {
                        enable: false,
                        speed: 40,
                        size_min: 0.1,
                        sync: false
                    }
                },
                line_linked: {
                    enable: true,
                    distance: 150, // パーティクル同士の距離
                    color: '#4C444D', // ラインの色
                    opacity: 0.4,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 2, // パーティクルの移動速度
                    direction: 'none',
                    random: false,
                    straight: false,
                    out_mode: 'out',
                    bounce: false,
                    attract: {
                        enable: false,
                        rotateX: 600,
                        rotateY: 1200
                    }
                }
            }
        });