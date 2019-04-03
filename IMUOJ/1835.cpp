#include<iostream>
#include<set>
using namespace std;
int main()
{
    set<int> nums;
    int n,count=-1;
    while (cin >> n)
    {
        count = nums.size();
        nums.insert(n);
        if (nums.size() == count) break;
    }
    for (set<int>::reverse_iterator it = nums.rbegin(); it != nums.rend(); it++)
    {
        cout << *it << " ";
    }
    cout << endl;
    for (set<int>::reverse_iterator it = nums.rbegin(); it != nums.rend(); it++)
    {
        cout << *it << " ";
    }
}