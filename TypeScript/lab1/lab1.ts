function createPhoneNumber(num: number[]): string {
    const firstNumbers = num.slice(0, 3).join('');
    const secondNumbers = num.slice(3, 6).join('');
    const thirdumbers = num.slice(6, 10).join('');

    return `(${firstNumbers}) ${secondNumbers}-${thirdumbers}`;
}

console.log(createPhoneNumber([1, 2, 3, 4, 5, 6, 7, 8, 9]))

class Challenge {
    static solution(number: number): number {
        if (number < 0) return 0;
        let sum = 0;
        for (let i = 1; i < number; i++) {
            if (i % 3 === 0 || i % 5 === 0) {
                sum += i;
            }
        }
        return sum;
    }
}

function rotateArray(nums: number[], k: number): number[] {
    k = k % nums.length;
    return nums.slice(-k).concat(nums.slice(0, -k));
}

const nums = [1, 2, 3, 4, 5, 6, 7];
const k = 10;
console.log(rotateArray(nums, k));


function findMedian(nums1: number[], nums2: number[]): number {
    let merged: number[] = [...nums1, ...nums2].sort((a, b) => a - b);
    let mid: number = Math.floor(merged.length / 2);

    if (merged.length % 2 === 0) {
        return (merged[mid - 1] + merged[mid]) / 2;
    } else {
        return merged[mid];
    }
}

const nums1 = [1, 3];
const nums2 = [2];
console.log(findMedian(nums1, nums2));

const nums3 = [1, 2];
const nums4 = [3, 4];
console.log(findMedian(nums3, nums4));