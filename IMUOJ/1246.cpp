#include<iostream>
#include<set>
using namespace std;
int main()
{
	int n;
	while (cin >> n)
	{
		set<int> num;
		if (n == 0)break;
		int t;
		for (int i = 0; i < n; i++)
		{
			cin >> t;
			num.insert(t);
		}
		cout << num.size() << endl;
		int count = 0;
		for (set<int>::iterator it = num.begin(); it != num.end(); ++it)
		{
			cout << *it;
			count++;
			if (count != num.size())cout << " ";
		}
		cout << endl<<endl;
	}
}