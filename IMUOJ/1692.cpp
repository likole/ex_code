#include<iostream>
#include<vector>
using namespace std;
int main()
{
	int n, k;
	vector<int> circle;
	cin >> n >> k;
	for (int i = 0; i < n; i++)
	{
		circle.push_back(i + 1);
	}
	int x = 0;
	int count=0;
	while (circle.size()>1)
	{
		x = x + k - 1;
		x %= circle.size();
		int t = circle[x];
		cout << t << " ";
		circle.erase(circle.begin() + x);
		x %= circle.size();
		t = circle[x];
		cout << t ;
		circle.erase(circle.begin() + x);
		count += 2;
		if (count != n) cout << " ";
	}
	if (n % 2)cout << circle[0];

}