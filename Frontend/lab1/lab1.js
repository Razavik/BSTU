var __spreadArrays = (this && this.__spreadArrays) || function () {
    for (var s = 0, i = 0, il = arguments.length; i < il; i++) s += arguments[i].length;
    for (var r = Array(s), k = 0, i = 0; i < il; i++)
        for (var a = arguments[i], j = 0, jl = a.length; j < jl; j++, k++)
            r[k] = a[j];
    return r;
};
function createPhoneNumber(num) {
    var firstNumbers = num.slice(0, 3).join('');
    var secondNumbers = num.slice(3, 6).join('');
    var thirdumbers = num.slice(6, 10).join('');
    return "(" + firstNumbers + ") " + secondNumbers + "-" + thirdumbers;
}
console.log(createPhoneNumber([1, 2, 3, 4, 5, 6, 7, 8, 9]));
var Challenge = /** @class */ (function () {
    function Challenge() {
    }
    Challenge.solution = function (number) {
        if (number < 0)
            return 0;
        var sum = 0;
        for (var i = 1; i < number; i++) {
            if (i % 3 === 0 || i % 5 === 0) {
                sum += i;
            }
        }
        return sum;
    };
    return Challenge;
}());
function rotateArray(nums, k) {
    k = k % nums.length;
    return nums.slice(-k).concat(nums.slice(0, -k));
}
var nums = [1, 2, 3, 4, 5, 6, 7];
var k = 10;
console.log(rotateArray(nums, k));
function findMedian(nums1, nums2) {
    var merged = __spreadArrays(nums1, nums2).sort(function (a, b) { return a - b; });
    var mid = Math.floor(merged.length / 2);
    if (merged.length % 2 === 0) {
        return (merged[mid - 1] + merged[mid]) / 2;
    }
    else {
        return merged[mid];
    }
}
var nums1 = [1, 3];
var nums2 = [2];
console.log(findMedian(nums1, nums2));
var nums3 = [1, 2];
var nums4 = [3, 4];
console.log(findMedian(nums3, nums4));
