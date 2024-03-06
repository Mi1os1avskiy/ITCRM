export const StopwatchMixin = {
    data() {
        return {
            timer: null,
            seconds: 0,
        }
    },
    computed: {
        formattedTime() {
            const self = <any>this;
            const minutes = Math.floor(self.seconds / 60);
            const seconds = self.seconds % 60;
            return `${self.padNumber(minutes)}:${self.padNumber(seconds)}`;
        },
    },
    methods: {
        startTimer() {
            const self = <any>this;
            self.timer = setInterval(() => {
                self.seconds += 1;
            }, 1000);
        },
        stopTimer() {
            const self = <any>this;
            clearInterval(self.timer);
            self.timer = null;
            self.seconds = 0;
        },
        padNumber(num: number) {
            return num.toString().padStart(2, '0');
        },
    },
    beforeDestroy() {
        const self = <any>this;
        clearInterval(self.timer);
    },
}
