#include<iostream>
using namespace std;
#include<list>
list<int> mlist;
void print()
{
	int n = mlist.size();
	int count = 0;
	for (list<int>::iterator it = mlist.begin(); it != mlist.end(); it++)
	{
		cout << *it;
		count++;
		if (count != n)cout << " ";
	}
	cout << endl;
}
int main()
{
	mlist.push_back(3);
	mlist.push_back(7);
	mlist.push_back(1);
	print();
	int command;
	while (cin >> command)
	{
		if (command == 0)break;
		if (command == 1)
		{
			int n;
			cin >> n;
			list<int>::iterator it= mlist.begin();
			for (int i = 0; i < n&&it!=mlist.end();i++)
			{
				++it;
			}
			mlist.insert(it, 0);
		}
		if (command == 2)
		{
			int n;
			cin >> n;
			list<int>::iterator it = mlist.begin();
			for (int i = 1; i < n&&it != mlist.end(); i++)
			{
				++it;
			}
			++(*it);
		}
		if (command == 3)
		{
			int n;
			cin >> n;
			list<int>::iterator it = mlist.begin();
			for (int i = 1; i < n&&it != mlist.end(); i++)
			{
				++it;
			}
			mlist.erase(it);
		}
		print();
	}
}