export const InputRangeMixin = {
    data() {
        return {
            ipRangeValue: 0,
        }
    },
    methods: {
        handleInput(event: any) {
            const self = <any>this;
            if (isNaN(event.target.value) || event.target.value < 0) {
                self.ipRangeValue = 0;
            } else if (event.target.value > 256) {
                self.ipRangeValue = 256;
            } else {
                self.ipRangeValue = parseInt(event.target.value, 10);
            }
        },
        updateRangeValue() {
            const self = <any>this;
            self.ipRangeValue = parseInt(self.ipRangeValue, 10);
        },
    },
}
