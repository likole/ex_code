#include<iostream>
#include<string>
#include<map>
#include<vector>
using namespace std;
int main()
{
	int n, k;
	map<char, string> nationality;
	map<char, int> lasting;
	vector<char> ship;
	nationality['a'] = "American";
	nationality['j'] = "Japanese";
	nationality['f'] = "French";
	nationality['e'] = "English";
	nationality['i'] = "Italian";
	lasting['a'] = 0;
	lasting['j'] = 0;
	lasting['f'] = 0;
	lasting['e'] = 0;
	lasting['i'] = 0;
	cin >> n >> k;
	for (int i = 0; i < n; i++)
	{
		char t;
		cin >> t;
		ship.push_back(t);
		lasting[t]++;
	}
	int x = 0;
	while (ship.size() > 1)
	{
		x = x + k - 1;
		x %= ship.size();
		char t = ship[x];
		ship.erase(ship.begin() + x);
		lasting[t]--;
		cout << "I am " << nationality[t] << " " << lasting[t] << endl;
	}
}